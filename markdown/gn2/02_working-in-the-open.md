---
title: Working in the open
description: Useful practices for government developers working with open source projects.
creator: Cam Findlay <cfindlay@linz.govt.nz>
publisher: Land Information New Zealand
subject: open source, configuration, git, version control, branching, testing, Continuous Integration, peer reviewing,
date: 2016-11-9
language: en
rights: CC BY-SA 4.0 [https://creativecommons.org/licenses/by-sa/4.0/](https://creativecommons.org/licenses/by-sa/4.0/)
---

## Working in the open

### Safe configuration practices
When releasing your code as open source software, ensure that you have not included any sensitive credentials in the publicly released code itself.

For example:

* Database logins

* API keys

* Configuration setting specific to your production deployment

* User account details

A issue here is that if you are using version control, once one of these details has been commented to the repository, it stays in the history forever (unless you remove the project history and start with a fresh commit of code but you will lose a wealth of project history information doing this).

A good practice to adhere to here is building a configuration layer into the software that you write. In your software code you can then write in references to the variables contained within the configuration file without exposing the values themselves. This make the software code much safer to share under an open source licence. You might also provide an example configuration file that users can duplicate before they configure their own copy of the software.

### Release early and often

Part of the value of developing code in the open is to 'release early, and often'[^1]. When working on code in public, it is acceptable to have code that is not yet ready for production (work in progress, often [indicated by the version number](#semantic-versioning). This is how bugs can be caught and fixed early, improving the quality of the code before it is put into production.

[^1]: The Cathedral and the Bazaar, 2015 http://www.catb.org/esr/writings/cathedral-bazaar/

Government open source projects have potential to be harmed by waiting for a particular event to occur before they are made publicly available. The longer the project is run closed prior to open sourcing it, the more difficult it will be to open.

At each step in a project, developers face a choice:

* do something in a manner compatible with a hypothetical future open sourcing; or

* do it in a manner incompatible with open sourcing (eg hard-coding an API key).

Every time the latter is chosen, the project gets just a little bit harder to open source. Sometimes you can't help choosing the latter occasionally. It's very difficult to give a future event the same present-day weight as, say, fixing the incoming bugs reported or finishing a new feature.

Everything in an open source project is part of the version history and exposed when you finally open source it. Cleaning this up prior to releasing takes time and resources that might have been avoided if the project had been open from the beginning.

### Version Control

Version control is like track-changes for documents but much more useful. It allows multiple people to work on the same code simultaneously and avoids having to pass the work back and forth in order for individuals to make their changes.

Using version control allows you to:

* Iteratively build up your software over time.

* Revert to an earlier version whenever you want to.

* Record your changes and the reasons why you made them, to help future developers understand the process.

* Work on changes in parallel as a team before merging them together (See [Working in branches](#working-in-branches)).

* Tag stable releases of code using meaningful version numbers (See [Semantic Versioning](#semantic-versioning))

### Distributed version control systems

[Git](https://git-scm.com/) has become one of the most widely used version control systems. Git is a distributed version  (DVCS) as it allows many developers to work simultaneously on the same project code by allowing multiple, distributed copies of the work and incremental improvements to contributed to an agreed copy of the code (usually in a publicly accessible code repository).

It's a good idea to use a DVCS for government open source projects as they are useful in managing both internal work and wider external contributors using the same set of software development processes.

This is because:

* everyone involved in the process has a full copy of the code and its history

* it’s easier for developers to create ‘branches’ in their code to explore new features or approaches without encroaching on others work

* developers can continue to work when the network is unavailable, making small incremental commits, merging their changes back with everyone else’s at a later date

### Getting up to speed with Git

If you are new to Git version control we recommend working through one of the online learning courses available at:

* [https://try.github.io](https://try.github.io)

* [https://www.codecademy.com/learn/learn-git](https://www.codecademy.com/learn/learn-git)

### Making commits

#### Make commits small and self-contained

When committing new code to your version control, make sure commits only relate to one feature or specific set of changes. Keep the commits as small as possible (while still achieving the outcome of the patch). An ideal commit is a cross-section of work including: the code for the patch, tests for the change (if relevant), documentation relating to that change. As a government open source project maintainer, set a good example in your commits and ask other developers that contribute to do the same. It will help with peer review and maintenance of the project over time[^2].

[^2]: See Costa, T. (2016). [Maintaining open source software.](https://thoughtbot.com/maintaining-open-source-projects-sample.pdf)

#### What makes a good commit message?

Your commit messages act as an audit trail for your code so be sure that if you looked back over these in a year's time, they would still make sense to you. More importantly, would they make sense to any new team members that may join in the future?

Write a commit message like you’re trying to explain it to your future self. Generally a good commit message contains the following[^3]:

[^3]: See [more detailed explanation of commit messages](http://chris.beams.io/posts/git-commit/#why-not-how
)

* Short subject line (max. 50 characters).

* Capitalised without a trailing full stop.

* Written in the imperative (i.e. an instruction on *how *it was done), for example "*Fix bug*" (correct) vs. “*Fixed bug*” (incorrect).

* If you need to explain more in your commit message, use the commit body text.

### Working in branches

It's a good rule of thumb to keep your "master" branch in a production ready state. At any time you should be able to safely deploy or install the "master" and have the current stable version of your software running. This means that practices such as contributing new code directly to the master branch should be avoided. Use branches and pull requests to achieve code improvements.

New features can be tested in separate branches without interrupting the main project releasability. People need the freedom to try new things without feeling like they're interfering with other's' work.There are times when code needs to be isolated from the main project branch, for example getting a bug fixed or stabilising a new release without worrying about tracking the moving target of daily development activity. Developers need to be able to review and comment on experimental work, treating branches as first-class, publishable objects makes this possible.

**Quick tips for branches**

* Use branches liberally.

* Encourage others on your team or contributing to the project externally to use them.

* Avoid long running branches, that is, build your feature in small iterations and merge back frequently.

* Watch out for branches becoming a mechanism for dividing the development community's efforts (the eventual goal of branches should be to merge changes back into the master and disappear, as soon as possible not hang around for a long time).

* Use a branching approach that doesn't add undue overhead to getting work completed. For example a large project might make use of a branching standard called "GitFlow"[^4], this might add too much undue process if the project is small (in which case you might simply use feature branches[^5] and pull requests to merge to master).

[^4]: See http://nvie.com/posts/a-successful-git-branching-model
[^5]: See https://git-scm.com/book/en/v2/Git-Branching-Branching-Workflows#Topic-Branches

### Peer reviewing

#### Why peer review in public?

Peer reviewing is an important process for teams building software. The benefits when peer review is carried out in public are magnified as the potential pool of people available to give constructive feedback is wider. This helps in a number of ways.

* It can improve the quality of the software in a measurable way eg reduced bugs per month by a percentage because of peer reviewing.

* Keeps a record of past software architecture decisions (you can go back and discover why something was done, this is good for new team members to get up to speed on projects).

* Keeps your software releasable, less chance of avoidable bugs making it into your master branch if the peer review picks it up before merging.

* The team and wider community gets to learn about new code as it’s being written.

* Helps to establish and maintain code standards in your open source projects.

* Feedback more likely to be applied if made in public.

#### Carrying out a technical code review

There are some things you can do to make the process of technical peer review smoother (both in your team and out in the wider open source community). These include:

* Making sure you [write good commit messages](#what-makes-a-good-commit-message) to help the reviewer know what they are reviewing.

* Don’t peer review your own work, make sure to engage your team and wider open source community..

* Open a pull request as a way to initiate peer review (allows comments directly on code).

* Use "@mentions" to alert others to consider peer reviewing your change.

* Keep your reviewable code in a separate branch.

* Peer review occurs directly before anything gets merged into master.

* Break down peer reviews into small pieces to help the reviewer.

* Developers can leave comments for reviewers in the source code to help them.

* Build a culture where catch bugs is a positive thing, it’s about the software having less defects and serving users better.

* Use testing tools like [Continuous Integration](#automating-your-testing) to automate some of the review process.

#### Making peer review request in an open source project in public

The following is a high level technical walk-through the process of raising a pull request on an open source project in a public repository for peer review.

1. Find the project repository you want to contribute to.

2. Raise an "issue" outlining the feature you intend to work on.

3. Use this issues as the place to dialogue and work out details of the new proposed feature. This avoids disappointment of your patch being rejected by the maintainers.

4. ‘Fork' a copy of the code repository into your own editable public repository.

5. Checkout your copy of the code to your local development environment.

6. Make a new branch to work in for your feature.

7. Once work is completed locally, push the branch of code to your publicly accessible 'fork'.

8. Raise a 'pull request', a proposal of code changes, on the original project repository.

9. There may be further online discussion while the code is peer reviewed as part of the pull request.

10. Once agreed, the maintainer will accept the pull request to merge branch into the project and the new feature will now be available, ready for a release.

#### When someone reviews your code

* Be grateful for the reviewer's suggestions avoid discounting them outright.

* Don't take it personally. The review is of the code, not you.

* Provide reasoning for why the code exists and be open to change.

* Extract refactoring into new issues to be tackled in the future.

* Do not squash commit until the branch is ready to merge so reviewers can read individual updates based on earlier feedback.

* Seek to understand the reviewer's perspective.

* Try to respond to every comment.

* If you’re using Continuous Integration wait until it tells you the tests pass before merging.

* Merge once you feel confident in the code and its impact on the project.

#### When you review someone else's code

* Seek to understand why the change is necessary (fixes a bug, improves the user experience, refactoring of existing code).

* Communicate which ideas you feel strongly about and those you don't.

* Identify ways to simplify the code while still solving the problem.

* If discussions turn too philosophical or academic, move the discussion offline. In the meantime, let the author make the final decision on alternative implementations.

* Offer alternative implementations, and assume the author already considered them.

* Seek to understand the author's perspective.

* Sign off on the pull request with a "+1" or "Ready to merge" comment once you’re happy with the change.

### Coordinated disclosure of security issues

A coordinated disclosure is designed to improve security of software systems and protect the public. It does this by ensuring that reporters of these issues are treated respectfully when they inform agencies of issues and that both parties (your agency and the reporter) work together in a responsible manner, in good faith and within the law to correct the issue and then let others know about it so they can update their own systems.

It’s important to ensure that external contributors know how to correctly contact you if they discover a security vulnerability in your open source software. Your organisation should respond in good faith to the reporter and encourage these type of reports being made safely for all involved.

You should have a process in place for this in the form of a Coordinated Disclosure policy which informs contributors how they should let you know about security related issues (rather than publicly disclosing them) and how you will work with them to resolve the issue that they have disclosed to you.

Some suggestions when you publish your open source software:

* Read over the [New Zealand Internet Task Force Coordinated Disclosure guidance](http://www.nzitf.net.nz/pdf/NZITF_Disclosure_Guidelines_2014.pdf).

* Put in place a coordinated security policy at your agency.[^6]

[^6]: See the Office of the [Office of the Privacy Commissioner’s policy for a good template](https://www.privacy.org.nz/news-and-publications/guidance-resources/vulnerability-disclosure). (Available under Creative Commons Attributions 3.0 NZ).

* Publish your policy on your agency’s website and link to it in your software code repository documentation to ensure contributors can contact you about security related issues.

* Include a summary of what contributors should do when they find a security issue in your code in your CONTRIBUTING.md documentation alongside your code. A sample insert for this is provided below.

* Set up an email such as "security@AGENCY.govt.nz" that can be used to report issues (you may also look into ensuring this can be done securely by providing a public encryption key[^7]

[^7]: [Introduction to email encryption] (https://support.mozilla.org/en-US/kb/digitally-signing-and-encrypting-messages).

* Respond promptly and in good faith to reporters of security issues (within 2 days is suggested), inform them as to what the next steps in the process are to get the issue resolved. Remember they have gone to the effort of letting you know about something important to your security and privacy, work with them to get the issue resolved and both parties should take a "do no harm" approach.

* Once you agree with the reporter that there is an issue to be fixed, keep the reporter informed as your work on the fix (a simple update email once a week to the reporter would be appropriate) to show you’re acting and haven’t gone silent on the matter. Try and stick to any timeframes you set to build trust with the reporter.

* Check your system for any signs of it being compromised and then fix the issue.

* NZGOAL-SE suggests informing other agencies known to be using your software, the CGIO, the GCPO and the Office of the Privacy Commissioner so the widest number of users get the opportunity to apply the fix to the software before it becomes publicly disclosed.

* Lastly, release your fix directly to your publicly accessible code repository (and consider applying a security patch version number as discussed in the [section on Semantic Versioning](#semantic-versioning) along with an advisory note or CHANGELOG in your project documentation informing users of the known issue and prompting them to update.

* Publicly acknowledge the reporter for helping with the fix (if they agree).

#### Communicating security disclosures to contributors

Use the following as a starting point to include in your CONTRIBUTING file regarding security issues (replace the content in upper case with your own details):

### Security Issues

Please don't file security issues in the bugtracker or publicly disclose them without first contacting us. We operate a Coordinated Disclosure policy and will work with you in good faith to responsibly fix and publicly disclose security issues appropriately.

Please read over our coordinated disclosure policy at: POLICY_URL

#### Checklist for reporting

* Don’t disclose the issue publicly

* Document the issue to help us understand how to fix it

* Read over our Coordinated Disclosure policy

* Report the security issue to us directly via security@AGENCY.govt.nz

* Be professional and clear in your communications

* Wait to hear back from us

* Provide any follow up information if requested to help resolve the issue

* Work with us on timing and publishing of the security issue.

##### Providing encryption for secure communication

There are tools available to generate private/public key pairs, encrypt and decrypt email communication when discussing software security related issues. You will also want to look at learning how to accept encrypted mail and decrypt it at your end.[^8]

[^8]: See https://support.mozilla.org/en-US/kb/digitally-signing-and-encrypting-messages

* For Windows: [https://www.gpg4win.org/](https://www.gpg4win.org/)

* For Mac: [https://gpgtools.org/](https://gpgtools.org/)

* For Linux: [https://www.gnupg.org/index.html](https://www.gnupg.org/index.html)  

If you have set up a encryption to allow reporters to security communicate with you you could also add the following in your CONTRIBUTING file (you might also include the generated public key itself in the documentation):

You can communicate securely to us by encrypting your email, please use our public key available at: PUBLICKEY_URL.

### Semantic Versioning

In order to indicate to other developers the status of publicly released code, your project can adopt [**Semantic Versioning (SemVer)**](https://semver.org), that is, version numbers that have a meaning.

SemVer is a three point versioning open standard in the format of "X.Y.Z". For example, [CKAN](http://ckan.org/)[^9] is version [**2.5.2**](https://github.com/ckan/ckan/blob/master/CHANGELOG.rst#v252-2016-03-31) using the SemVer standard.

Let's detail what these numbers mean.

[^9]: CKAN is the application used by beta.data.govt.nz open data portal is as of Oct 2016.

The **"Z"** refers to a “security” version which indicates a bug or security fix has been added to the code and you should look to upgrade as soon as possible. Security releases should be backwards compatible with the current minor version, that is, they should be able to be installed without interrupting any additional customisations you may have made to a minor version of the software. The security release version changes the most frequently of the 3 levels. In our CKAN example, there have been 2 security patches applied to the current released version as you can see from the number on the right of the version (X.Y.2).

The** "Y"** indicates a “minor” version and indicates that new features have been added and they will be backwards compatible with previous minor versions. For the CKAN example here, you can read the middle number and quickly find out that this is the 5th minor version of the software (X.5.Z) and this version should be compatible with version 2.4.0 all the way back to 2.0.0 or any future versions such as 2.6.0 for example.

The **"X"** indicates a "major" version and changes if the code undergoes a major rewrite with backwards *incompatible* changes. Major versions indicate to developers that they will need to do some work when upgrading the version of the software if they have made any customisations. From the CKAN version number on the left (2.Y.Z), you can find out that there have been 2 major versions of the software released.

Putting out CKAN example together we can quickly get an understanding as a developer that there have been have 2 major versions, 5 minor versions of the major version and 2 security patches to the latest minor version - hence version **2.5.2.**

When first releasing an open source project publicly it is common to use version 0.1.0 and begin to increment from this point forward. This indicates that there is no major stable version yet ready for production. Over time as incremental contributions are made and the code is improved, tested and deemed ready to use in projects the semantic version would increment to 1.0.0.

SemVer tagging is widely practiced standard in the wider open source software community and recommended for government open source projects to help communicate to external contributors valuable information about the project status.

### Testing in open source projects

Testing in any software project is useful as it helps ensure that software does what it is supposed to do. In context of an open source project, this is even more important as contributors to the project may be external and have less context about the inner workings of the software than the original maintainers.

While we won’t talk specifically about how to write tests for specific applications (the scope depends on your project and is too wide to cover here), manually testing can be very time consuming so it is a good practice to set up an automated suite of tests. This helps determine if any potential changes to the code will cause it stop functioning as it is supposed to *before* changes make it into the released version of the code.

This is called often referred to as Regression testing (and there are a number of other types you may want to look into for your project including Unit testing and Behavioural/functional testing).

Regression testing becomes useful as the size and complexity of your project grows. There is a trade off of the time to write the tests versus code for the application itself. Here you need to use judgement and test appropriately for the size and importance of the features in your open source project.

It is common practice in open source projects to require that contributors ensure any existing tests pass before their changes are accepted. It’s also preferred that they contribute tests for new code they write and submit. Again, in this case be careful that requiring tests with every contribution doesn’t bottleneck the process of contribution itself (you want to encourage not hinder people efforts). You might want to describe what type of code changes do or do not require testing explicitly in your project documentation so contributors know when they need to write these.

#### Automating your testing

Many existing public code repositories include or can integrate with automated regression testing tools (referred Continuous Integration or CI). These can often be set up free of charge for open source projects and help external contributors see when a change they propose might affect the software working as intended.

If you are using branches and pull requests as part of your development workflow, most CI tools run your tests whenever a new change is proposed via a branch or pull request. CI tools can also block the change from being merged into the code if the tests are failing which avoids bugs making their way into the software to begin with.

The following are some available tools often used for automated testing in open source projects.

##### Travis CI

[https://travis-ci.org/](https://travis-ci.org/)

Travis CI integrates with GitHub repositories to run your tests automatically, whenever new code is pushed to a branch. To set up your project to work with GitLab CI you include a ".travis.yml" file in your project and then follow their setup guide at: [https://docs.travis-ci.com/user/getting-started/](https://docs.travis-ci.com/user/getting-started/)

##### GitLab CI

[https://about.gitlab.com/gitlab-ci/](https://about.gitlab.com/gitlab-ci/)

GitLab CI is integrated into the GitLab code repository tool (from version 8.0 and up). It’s a good choice if you are using GitLab to host your open source project. To set up your project to work with GitLab CI you include a ".gitlab-ci.yml" file in your project and then follow their setup guide at: [https://docs.gitlab.com/ce/ci/quick_start/README.html](https://docs.gitlab.com/ce/ci/quick_start/README.html)

##### Jenkins

[https://jenkins.io/](https://jenkins.io/)

Jenkins is a self hosted, open source CI tool. It’s useful when you are testing code internally or if you are hosting your own code repository tools for your projects. Assuming you have an instance of Jenkins running, to set up your project to work you include "JenkinsFile" file in your project and then follow their setup guide at: [https://jenkins.io/doc/book/pipeline/jenkinsfile/#creating-a-jenkinsfile](https://jenkins.io/doc/book/pipeline/jenkinsfile/#creating-a-jenkinsfile)
