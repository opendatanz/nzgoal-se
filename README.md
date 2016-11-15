# NZGOAL Software Extension - Policy and guidance note source

The `markdown` folder contains the source content for the NZGOAL-SE policy and the accompanying Guidance Notes. Markdown is used to ensure the content is semantically correct and focuses on content rather than formatting and style.

The markdown source can then be used to generate other outputs for user consumption such as:

 - html for web delivery
 - pdf for print
 - epub for digital readers

 A [PHP](https://php.net) based build tool is provided here to generate the semantically correct markup for publishing on NZ government websites.

## Maintainers
 - Open Data NZ <opendatanz@gmail.com>

## License

See [LICENSE](LICENSE.md) for content and source code license information.

## Contributions

See [CONTRIBUTING](CONTRIBUTING.md) for contributing information, code of conduct and moderation policy.

### What you can contribute
If you would like to contribute to this work you can:

 - Peer review the markdown guidance notes for better readability.
 - Discuss and contribute new sections to the guidance notes, raise an `Issue` first to discuss the new content.
 - Port the build tool into other programming languages eg Python, Ruby to allow it to be used widely.
 - Improve the build tool to include meta tags for all markdown metadata in the html markup output.

>Note: we cannot accept and pull requests for the NZGOAL-SE policy itself however if you'd like to discuss the policy you can raise an `Issue`. Keep in mind policy changes require an involved public consultation process to make changes whereas Guidance Notes have been designed to be updated as technology and practices progress.

## Getting started

### Requirements
 - [PHP 5.6+](https://php.net)
 - [Composer](https://getcomposer.org)
 - [PHP tidy](http://php.net/manual/en/book.tidy.php)
 - [Pandoc](https://pandoc.org)

 See [Installing requirements](docs/en/installing-requirements.md) for help setting up the build tool

### Building the content
 1. Clone the code to your local development environment.
 2. Open terminal and `cd` to the directory.
 3. Run `composer install` to install the dependancies.
 4. Run `php ./Build.php` to build the html content from the markdown source.
