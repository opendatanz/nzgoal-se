---
title: Getting started
description: Getting started with the technical aspects of releasing an open source project in government.
creator: Cam Findlay <cfindlay@linz.govt.nz>
publisher: Land Information New Zealand
subject: open source, git, accounts, best practices,
date: 2016-11-9
language: en
rights: CC BY-SA 4.0 [https://creativecommons.org/licenses/by-sa/4.0/](https://creativecommons.org/licenses/by-sa/4.0/)
---

## Getting started

### Don’t repeat yourself
A key concept of using or maintaining an open source project is the "Don’t repeat yourself" (DRY) rule.  Here are a few guidelines to help you through the process of finding software that already exists that you can make use off before developing from scratch.

 * When building a new feature for an existing project check to see if someone has already done the same and reuse it. A quick search using the name of the software and a short description of the feature you are looking to develop will usually help you discover existing code.

 * You might also search in other public software directories such as:

    * [GitHub](https://github.com/) - Social code repository

    * [GitHub Government](https://government.github.com/community/) - Find other government code releases around the world

    * [GitLab (SaaS hosted)](https://gitlab.com/explore)

    * [OpenHub](https://www.openhub.net/)

    * [The Free Software Directory](http://directory.fsf.org/wiki/Main_Page)

    * [New Zealand Open Source Society](https://git.nzoss.org.nz/explore/projects)

    * [SilverStripe Addons catalogue](http://addons.silverstripe.org/) - SilverStripe plugins (compatible with Common Web Platform)

    * [Packagist](https://packagist.org/) -  PHP code libraries

    * [Ruby Gems](https://rubygems.org/) - Ruby code libraries

    * [PyPi](https://pypi.python.org/pypi) - Python code packages

 * Keep an open mind, you may find that parts of your feature exist already in existing libraries. If you find part of what you intended to build ask yourself if you could reuse it in part part and build further on top of it to develop the feature you need.

 * Before selecting existing code to reuse, examine how well maintained it already is:

    * Does the maintainer answer comments on the code?

    * Has there been a commit to the code recently?

    * Is there a tagged stable version?

    * Is there any documentation?

    * Are issues or support requests going unanswered?

    * It’s a good practice to base your new developments on maintained existing code, however if the code is not well maintained and you find it still solves your problem you may want to consider maintaining it yourself as a derivative version.

 * In the case of an abandoned repository of code, try and at least contact the maintainer.

    * You may be able to adopt the original repository and become its new maintainer (or co-maintainer with others). This is preferable over "forking" the code (taking a copy of it and developing it in parallel).

    * The ideal is for improvements to end up in the original repository however sometimes you have no choice (for example if the code has been abandoned or not actively maintained).

### Where and how to publicly release your code?
Part of the open source process involves putting your code online in an openly accessible way (not just a zip file on your agency website). You will want to ensure there is a process for others (and your own team) to contribute improvements to this code, raise issues and control the collaborative development process. Agencies should look to make use of existing code management tools wherever possible (NZGOAL-SE advocates for this) to enable others to find and reuse the code also to avoid the operational costs of running such an ICT system. There are online repositories (both free and paid) as well as self-hosted options available (should you wish to operate your own code repository).

Some of the available options include:

 * [GitHub](https://github.com/)

 * [GitLab ](https://gitlab.com/)(as a service or self-hosted)

 * [Bitbucket](https://bitbucket.org/)

 * [Common Web Platform](https://gitlab.cwp.govt.nz/explore/projects) (for New Zealand Government users of this shared service)

 * [NZOSS](https://git.nzoss.org.nz/) (free community run GitLab repositories from the New Zealand Open Source Society)

 * [Drupal.org](https://www.drupal.org/node/648898) (for Drupal themes and modules)

Which ever option you choose, you’ll want to ensure that it is easy for external parties to interact with. If a contributor has an important fix to your software and cannot submit it or find the contact details for you as the maintainer, then that work may never see the light of day and the benefit of community contributions of open source is lost.

#### Setting up an organisation account

When setting up a code repository account to make your public open source releases, agencies should avoid signing up for an individual user account. It is recommended to set up an organisational account (in some code repositories these are called "groups"). You can then assign access to individual developer accounts within that organisation.

Organisation account have the advantage of:

 * Being able to organise a number of open source projects in one central location.

 * Managing the permissions of many individual developer accounts (internal teams, contractors or external community members) to an organisation's open source projects.

 * Ensure open source projects are not tied to one individual and are available into the future (even as staff come and go from the projects).

For example, the [govt.nz website team have a GitHub organisation](https://github.com/GOVTNZ) grouping all the open source licensed code they have released in one place, they assign individual developer access to these projects when needed.

When working with external contractors or across agencies, giving them read or write access to your repository is encouraged. It facilitates the flow of ideas and builds stronger community support around your open source projects.

Add the additional and removal of developer access to your staff/contractor induction and exit processes. Ideally, have someone like a team lead or IT manager that is savvy with code repository account management hold the administrator access to the organisation account so that they can add or remove staff when required (otherwise you may need to document the process and make available to your HR team). Don’t give admin rights to the organisation account to anyone but your agency staff.

#### Individual user accounts

Government and contractor developers should use individual accounts when committing their code changes and responding to contributors. They should assign their ".govt.nz" email address to the account. This helps to keep an audit trail of the work history and shows others which code has come from the official government maintainer of the project. It’s important to maintain transparency when developing code in the open and this helps everyone contributing to the project know who to contact when working with an open source project. If you already have an account with the code management tool in use for the project, rather than making a new account you can often associate your “.govt.nz” email address to your account as a secondary email.

If you are signing up for a new account:

 1. Sign up and associate your ".govt.nz" email as the primary address for the account.

 2. Complete your profile including your image, bio etc so others can get to know you better when working on open source projects with you.

 3. If available, set up two-factor authentication to keep your account secure.

 4. Request your team to be add you to the organisation account that has been set up.

 5. Ensure that any notifications from the project go to your ".govt.nz“ email .

 6. Respect any agency or project specific code of conduct.

 7. Don’t store any sensitive information in the code repository. See "[Safe configuration practices](working-in-the-open#safe-configuration-practices)".

### What to include in your first code release

 * Your software code

 * A licence (it’s not open source without a licence!)

 * Supporting documentation. See ["What documentation should I include with my code?](documenting-you-code#what-documentation-should-i-include-with-my-code).

 * Any supporting project metadata files (note a metadata standard and discovery portal has not yet been set to catalogue NZ government open source projects. This may develop in the future, if so we’ll update these guidance notes when applicable).

 * Tag a version (See [Semantic Versioning](working-in-the-open#semantic versioning) or best practices established already in the project or framework your work relates to).
