---
title: Documenting your code
description: How to document you government open source project.
creator: Cam Findlay <cfindlay@linz.govt.nz>
publisher: Land Information New Zealand
subject: open source, documentation, markdown, readme,
date: 2016-11-9
language: en
rights: CC BY-SA 4.0 [https://creativecommons.org/licenses/by-sa/4.0/](https://creativecommons.org/licenses/by-sa/4.0/)
---
{::options footnote_nr="10" /}

## Documenting your code
Documentation is an important part of releasing your work as open source. This helps users get started, understand what your code does and how they might make use of it. Good documentation clearly answers questions that users have - either by informing or by instructing them.[^10]

[^10]: See Instructing and Informing at http://slash7.com/2006/11/15/tech-writing-the-five-sins/

### General points about technical documentation

* Document your code for your own future reference (because it’s in the open others will benefit too), chances are one day you’ll thank yourself (and your team).

* Some documentation is better than none. Leave documentation "stubs" (pages with headings of known areas not documented), this helps by providing a clear place to contribute documentation and shows you are aware of what is and isn’t complete. It is common practice in open source to accept things as incomplete as long as this is pointed out to users.

* Understand that documentation is never really finished, it will evolve as your code does.[^11]

[^11]: See http://producingoss.com/en/producingoss.html#documentation

* You cannot write a Frequently Asked Questions from scratch; as it says on the tin, they require you to actually answer questions from real users that come up often with real world use of your project. Document as you learn.

* Bundle your documentation alongside your code in a standard format ([Markdown format is useful here](#markdown)); this makes it easy to update as code is improved.

* Always include at least a README document in the root of your project.

* Talk to your users if you can to find out what they need before writing the documentation.

### Types of documentation

There are generally 3 types of documentation that either inform or instruct your users.[^12]

[^12]: See https://jacobian.org/writing/what-to-write/

1. **Tutorials** - Step-by-step guides that instruct your user how to do something specific with your code. This might be a detailed walkthrough of getting started or how to accomplish a common coding task. They should be short, easy to complete (and not too easy that learning doesn’t occur) and should demonstrate what it’s like to work with your project’s code.

2. **Guides** - These will form the main bulk of your documentation. They are used to describe and inform users about the concepts and features you’ve included in your software. These might also include some code snippets to help explain concepts. Aim for completeness, a user should be able to feel like they have a good grasp on a particular aspect of your software after reading these guides.

3. **Reference material** - This details your softwares public APIs (methods and classes) that developers can make use of when adapting to suit their needs. Developers use these guides to look up the arguments and implementation specifics of your code so the audience is likely more technical. Reference material is not a substitute for good well written guides and tutorials.

### Markdown documentation

Use a open standard format when writing your documentation so that anyone can read it. A standard format widely used for documentation is called Markdown.[^13] It’s easy to learn , small in file size and captures both the content and formatting. Markdown can be used for outputting many other formats, for example you can use it to produce HTML for websites, PDF and Docx for print, or even Epub for e-readers while keeping a single source of truth, the Markdown source.

[^13]: See https://en.wikipedia.org/wiki/Markdown

Markdown documentation is treated exactly the same as code in your version control system - you can track the changes over time, many developers are able to work on it at the same time and merge changes together once ready to release.

Markdown is a text file and saved with the file extension ".md", you write your content using plain text and use a set of plain text “marks”  to represent the format of your document.

#### Example of markdown format

An example of Markdown looks like this when writing it:

```
    # My documentation

    This is a paragraph of text talking about my work and how you might make use of it as a developer. You’ll note paragraphs need no extra formatting.

     * Here I’ll make a bullet point

     * And another

     * One more

     1. An ordered list of numbers

     2. Another number

    ## Here is a sub heading

    ### And a sub, sub-heading

    [Here is a link](https://ict.govt.nz)
```

Markdown is rendered into human readable html pages. For example the above Markdown would render as follows when viewed online as part of your code repository:

# **My documentation**

This is a paragraph of text talking about my work and how you might make use of it as a developer. You’ll note paragraphs need no extra formatting.

* Here I’ll make a bullet point

* And another

* One more

1. An ordered list of numbers

2. Another number

## **Here is a sub heading**

### **And a sub, sub-heading**

[Here is a link](https://ict.govt.nz/)

There are several [guides](https://daringfireball.net/projects/markdown/) and [cheat sheets ](https://guides.github.com/features/mastering-markdown/) that show the full range of formatting options.

We recommend learning and making use of Markdown for government open source documentation and if a document copy (PDF/Docx) is required then these can be generated from the source material using several [open](https://github.com/alanshaw/markdown-pdf) [source](http://kevin.deldycke.com/2012/01/how-to-generate-pdf-markdown/) [software](https://github.com/walle/gimli) [applications ](https://atom.io/packages/markdown-pdf)and [tools](http://pandoc.org/).

#### Markdown Metadata

Another great aspect of Markdown format is you can also include metadata directly within it. You might use this to provide additional information to users about the nature of the documentation contained in the document. Markdown metadata is 3 dashes followed by key/value pairs at the top of your document before you start the first paragraph, closed with a final 3 dashes. Any metadata standard can be represented, it would be suggested to use of a few commons attributes like "title" and “description” and you might also implement an existing open metadata standard such as [Dublin Core](http://dublincore.org/documents/usageguide/elements.shtml).

For example:
```
---
title: My document
description: A description about my document here this might be the same as the introduction paragraph in the body of the document.
creator: A. Person
publisher: Land Information New Zealand
subject: keywords, here, with, commas,
date: 2016-10-15
language: en
rights: CC BY 4.0 [https://creativecommons.org/licenses/by/4.0/](https://creativecommons.org/licenses/by/4.0/)
---
```

### What documentation should I include with my code?

* **LICENSE.md** - This should include the text of your chosen open source licence (from NZGOAL Software Extension this will usually be MIT or GPL v3).

* **README.md** - This will likely be the first piece of documentation your users read, depending on the size of your project it may be the  only documentation you include. See below for what to include in your readme file.

* **CONTRIBUTING.md** - This file includes information to potential contributors about any code of conduct and processes that users need to be aware of if they contribute to the project such as security disclosures and licensing considerations. The use of a contributing file is mentioned in [NZGOAL Software Extension contribution principles](https://www.ict.govt.nz/guidance-and-resources/open-government/new-zealand-government-open-access-and-licensing-nzgoal-framework/nzgoal-se/nzgoal-se-policy-principles/#contributions).

* **CHANGELOG.md** - Includes a list of changes you make to your code each time you release new versions. You might provide a link to an external changelog tracker in this file rather than store the changes directly. You can also make use of [automated changelog generator tools](https://github.com/skywinder/Github-Changelog-Generator) to produce this file.

* **docs/en/** - Your more detailed documentation should reside in a docs folder and a language code subfolder "en" for English in this example. Within this folder you can include as many Markdown pages and sub-folders needed to best structure your full documentation.

### What to include in your README file

* Name of your project.

* Short description of what the code or software does (2-3 sentences up to a paragraph).

* Requirements - of servers, infrastructure to run the software and any other software packages needed to run the code and any technical know-how such as the programming languages used.

* Installation instructions and "Getting started" section to get the software setup or configured.

* The licence the code is released for reuse under and link to the LICENSE file.

* Documentation - a small project might include this in the README directly or you might provide a link to the full documentation in your "/docs/en/" sub-folder.

* A link to your CHANGELOG file.

* Contact details for the maintainer (you might include a team email address or point of contact).

* Describe how and where users can log issues and bugs, ie in your bug tracker.

* How others can contribute to the project - include a link to your CONTRIBUTING file.

### Your first release of documentation

Documenting a new project can be daunting, ideally you can split up this task by documenting features as you code them though this is not always practical. For you first set of documentation we recommend that you limit the scope to a few key aspects:

* Your README (as described above)

* Create one tutorial that walks new users through a common task or use of the software. This helps show the user what can be done and gets them thinking about how they might use your code.

* Describe what you know is missing from the documentation (you might also created "stub" pages for these).

You don’t need to set any expectations as to when these will get written, it’s acceptable in open source to simply ensure users are aware of any shortcomings and then they can choose you use your code anyway and they are free to contribute any improved documentation.

### Structuring your documentation pages

It’s a good idea to use a consistent structure when you have documentation that spans several separate pages and topics. A skeleton structure for a section of your documentation might look like this:

* Metadata.

* Heading (descriptive enough to tell the reader what topic is covered).

* Short summary of what the reader will get out of reading the document.

* Main body of the content, using sub-headings and a style guide to make it easy to read.

* Short summary of points or review at the end.

* Optional "related" documents or link to the next topic the user should read.

### Writing style guide

To keep your documentation easy to use and consistent the use of a writing guide is a good idea. Your agency may already have its own set of writing guides in which case you might use this. Alternatively you could look to reuse the [Govt.nz writing style guide](https://www.govt.nz/about/our-style-guide/) as it is a good example of ensuring writing is accessable and in plain English while allowing the use of technical terms which are unavoidable in software documention.

**Other general points for technical writing styles are:**

* Important information goes first.

* Use an active voice - tell the reader what you want them to do or what they are learning.

* Know and write for your audience.

* Keep sentences short.

* Avoid superlatives, keep technical writing clear and concise it’s about delivering information to your users.

* Use callouts for really important information.

**Things to avoid:**

* Losing the reader by not getting to the point quickly.

* Making the reader feel stupid by using lots of jargon or technical terms without first defining them (unless you're certain of your audience).

* Not providing enough context to aid understanding.

* Not stating what the reader will learn.

* Not updating your documentation as your code changes over time.

### Licensing your documentation

Your software documentation is a separate copyright work to your software code. As such you need to license it for reuse separately. Open source software licenses should not be used for documentation.

A Creative Commons licence is more in line with existing government policy. NZGOAL Software Extension includes a [section on how to licence your software documentation](https://www.ict.govt.nz/guidance-and-resources/open-government/new-zealand-government-open-access-and-licensing-nzgoal-framework/nzgoal-se/nzgoal-se-review-and-release-process/#licensing-of-accompanying-documentation) appropriately and in line with current policy.

In summary, use Creative Commons Attribution (CC BY 4.0) licence if you have licensed your software under an MIT licences and Creative Commons Attribution Sharealike (CC BY-SA 4.0) if you have released your software under a GPL license.

For more detailed information on the open licensing of New Zealand Government copyright works see  the original [NZGOAL ](https://www.ict.govt.nz/guidance-and-resources/open-government/new-zealand-government-open-access-and-licensing-nzgoal-framework/)framework.
