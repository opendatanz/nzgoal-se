<?php
require __DIR__ . '/vendor/autoload.php';

use Pandoc\Pandoc;

class Build {

  public static $markdown_dir = __DIR__ . '/markdown';

  public function __construct() {
    foreach (glob(self::$markdown_dir . '/*', GLOB_ONLYDIR) as $folder) {
      $this->Generate($folder,'html');
      $this->Generate($folder,'docx');
      $this->Generate($folder,'epub');
      $this->Generate($folder,'odt');

    }

  }

  /**
   * Parses the markdown source to output clean html for publishing on web.
   * @TODO provide error handling if pandoc is not installed with instructions to install
   * @return boolean true if completed, false if error
   */
  public function Generate($folder, $output='html') {
    $content = "";
    $output_directory = __DIR__ .'/'. $output;

    foreach (glob($folder . '/*') as $file)
    {
      $content .= file_get_contents($file);
    }

    //start the build
    echo 'Building ' . basename($folder) . '.'.$output.'... ';

    //convert md to html via pandoc bin
    $pandoc = new Pandoc();
    $options = array(
        "from"  => "markdown",
        "to"    => $output,
        "standalone" => null, //this includes the meta data in the markup
        "toc" => null,
    );
    $generate = $pandoc->runWith($content, $options);

    switch($output){
      case 'html':
        //tidy the output html
        $tidy = new Tidy();
        $options = array('indent' => true);
        $tidy->parseString($generate, $options);
        $tidy->cleanRepair();
        // save to file
        file_put_contents($output_directory . '/' . basename($folder) . '.' . $output, (string) $tidy);
        break;

      default:
        file_put_contents($output_directory . '/' . basename($folder) . '.' . $output, (string) $generate);
        break;
    }

    // output the work completed
    echo 'done!' . PHP_EOL;

    return true;
  }
}
//Run the build script
new Build();
