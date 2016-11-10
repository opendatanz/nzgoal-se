<?php
require __DIR__ . '/vendor/autoload.php';

use Pandoc\Pandoc;

class Build {

  public static $markdown_dir = __DIR__ . '/markdown';

  public static $output_dir = __DIR__ . '/html';

  public function __construct() {
    foreach (glob(self::$markdown_dir . '/*', GLOB_ONLYDIR) as $folder) {
      $this->GenerateHTML($folder);
    }

  }

  /**
   * Parses the markdown source to output clean html for publishing on web.
   * @TODO build a full document including TOC
   * @TODO provide error handling if pandoc is not installed with instructions to install
   * @return boolean true if completed, false if error
   */
  public function GenerateHTML($folder) {

    foreach (glob($folder . '/*') as $file)
    {
      //start the build
      echo 'Building ' . basename($file) . '... ';

      //convert md to html via pandoc bin
      $pandoc = new Pandoc();
      $options = array(
          "from"  => "markdown",
          "to"    => "html",
          "standalone" => null //this includes the meta data in the markup
      );
      $html = $pandoc->runWith(file_get_contents($file), $options);

      //tidy the output html
      $tidy = new Tidy();
      $options = array('indent' => true);
      $tidy->parseString($html, $options);
      $tidy->cleanRepair();

      // save to file
      file_put_contents(self::$output_dir . '/' . basename($folder) . '/' . substr(basename($file),0,-3) . '.html', (string) $tidy);

      // output the work completed
      echo 'done!' . PHP_EOL;
    }
    return true;
  }

  //@TODO build out this function to generate PDF version of the policy and guidance notes
  public function GeneratePDF(){
    return null;
  }

}

//Run the build script
new Build();
