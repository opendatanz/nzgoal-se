---
title: NZGOAL-SE Policy Principles
description: A set of guiding principles that agencies are encouraged to apply when releasing and licensing publicly funded software on open source terms.
creator: Open Data NZ <opendata@linz.govt.nz>
publisher: Land Information New Zealand
subject: open source, NZGOAL, software, principles
date: 2016-07-20
language: en
rights: CC BY 4.0 [https://creativecommons.org/licenses/by/4.0/](https://creativecommons.org/licenses/by/4.0/)
---
{::options footnote_nr="6" /}

## Introduction {#introduction-2}

**13.** Government agencies are strongly encouraged to apply the
following Policy Principles in relation to publicly releasing and
licensing their software on open source terms. The Principles should be
read in their entirety but here is a summary:

  --------------------------------------------------------------------------------------- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
  **Policy Principle**                                                                    **Summary**
  Open access and public release of agency software using free and open source licences   If an agency wishes to license its software, it is encouraged to do so on open source terms, to use public version control and source code repository platforms and to follow the NZGOAL Review and Release Process and decision tree.
  Ensuring copyright ownership or right to sub-license                                    Make sure your agency has the required copyright-related rights to license the software.
  Exceptions                                                                              Releasing under open source terms does not apply where an exception applies.
  Adaptations                                                                             Respect existing licenses when re-using existing software. Be careful when considering whether you're "adapting" pre-existing software.
  Security code review                                                                    Consider whether a security code review is required to identify sensitive elements that may need to be removed.
  No additional controls or discrimination                                                Do not seek to impose requirements that are inconsistent with the freedoms in the chosen FOSS licence.
  No charging                                                                             Do not charge people for access to FOSS licensed software.
  Updating FOSS licensed software                                                         If you spot a bug with software you've licensed, consider informing users and, if you fix the bug, release the updated files. Take appropriate action if there's a security risk.
  Contributions                                                                           Where appropriate, adapted, pre-existing open source licensed software should be contributed back to the open source community. Agencies should provide guidance on how they will accept external contributions to their own released source code.
  Obtaining rights when procuring or commissioning the development of software            If you commission the development of software that you want to FOSS license, make sure you obtain the rights to license it on FOSS terms.
  Act fairly towards developers when drafting IP warranties and indemnities               If you commission the development of software that uses pre-existing third party FOSS licensed software and/or that you may FOSS license, act fairly in relation to IP warranties and indemnities.
  Liability                                                                               Replicate all disclaimers and exclusions contained in the relevant FOSS licence when you release software under that licence.
  Review and Release Process                                                              Follow the NZGOAL-SE Review and Release Process.
  --------------------------------------------------------------------------------------- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Each Policy Principle is set out below.

## Open access and public release of agency software using free and open source licences

**14.** If government agencies have the required copyright-related
rights to do so, and wish to license their software source code for
re-use, they are encouraged:

a.  to consider making their source code, that is or may be of interest
    or use to people, available for re-use under a FOSS licence as
    further described in these Policy Principles and in accordance with
    the NZGOAL-SE Review and Release Process and decision tree, unless
    an exception in paragraph 18 applies; and
b.  if they decide to do so, to:
    i.  use existing version control systems and source code repository
        platforms to allow for discussion and improvement of released
        software;[^6] and
    ii. make the software publicly accessible by releasing it online;
        and
    iii. use existing, freely available software to interact with the
        released software source code

(the **Open Access and Licensing Principle**).

[^6]: Both the United Kingdom Government Digital Services
([*https://www.gov.uk/service-manual/making-software/choosing-technology.html\#sharing-software*](https://www.gov.uk/service-manual/making-software/choosing-technology.html#sharing-software))
and the United States Federal Government
([*https://sourcecode.cio.gov/Implementation*](https://sourcecode.cio.gov/Implementation))
express the value of modern software development practices such as
version control and code repository platforms for sharing and the
improvement of publicly released government source code.

**15.** For the purposes of NZGOAL-SE, the recommended set of free and
open source software licences for which selection guidance is provided
are:

a.  the **MIT licence:**[^7] this is a more
    permissive licence in the sense that it does not contain a
    sharealike obligation that would require adaptations to be licensed
    under the same terms if distributed (the full text of the MIT
    licence can be found on the website of the [*Open Source
    Initiative*](https://opensource.org/licenses/MIT))[^8]; and
b.  the **GPL licence:** this is sharealike/copyleft licence that
    requires those who adapt the source code to release their
    adaptations on the same terms if they distribute them (the full text
    of the GPL licence can be found on the website of the [*Free
    Software
    Foundation*](http://www.gnu.org/licenses/gpl-3.0.en.html)).[^9^](#fn9){#fnref9
    .footnoteRef}

[^7]: The MIT licence is considered preferable to the BSD 3-Clause licence
(another commonly-used permissive open source software licence)
because the MIT licence includes a clearer grant of rights and
expressly includes the right to sub-license (the BSD licence
does not). Whilst many interpret a right to sub-license as being
implicit in the BSD licence, the absence of an express reference to
it in the BSD licence could produce uncertainty for users, most
notably users who wish to incorporate government-produced code in a
work licensed under the GPL. The Free Software Foundation considers
the BSD licence to be compatible with the GPL but that must depend
on a particular interpretation of the BSD licence wording (see
generally A Sinclair "License Profile: BSD" IFOSS Law Review, 2(1)
pp. 1-6). The MIT licence doesn't contain the BSD's 'no endorsement'
clause but, in most cases, the law would prevent claims of
endorsement without permission anyway. Another common permissive
licence, the Apache License 2.0, was not chosen because it is
more complex. The Free Software Foundation considers it preferable
to the BSD and MIT licences as it deals with patent licensing and
prevents 'patent treachery'. However, in New Zealand the Patents Act
2013 excludes computer programs "as such" from patentable subject
matter (and, in any event, historically government agencies have not
generally been in the business of applying for software patents).
NZGOAL-SE could have recommended its own bespoke permissive licence
instead of the MIT licence but that would have contributed to
further licence proliferation and exposed developers to a licence
they're not familiar with.

[^8]: See
[*https://opensource.org/licenses/MIT*](https://opensource.org/licenses/MIT)

[^9]: GPL as used in NZGOAL-SE refers to the GNU General Public Licence version 3 or later. See
[http://www.gnu.org/licenses/gpl-3.0.en.html](http://www.gnu.org/licenses/gpl-3.0.en.html)

<a style="text-align right;" href="#top"><strong>&uarr;Top</strong></a>

## Ensuring copyright ownership or right to sub-license

**16.** Paragraph 14 makes it clear that, for the Open Access and
Licensing Principle to apply, an agency must have the required
copyright-related rights to license the software.

**17.** Agencies should only license software for re-use by others under
a FOSS licence where:

a.  they own or can obtain an assignment of all copyright in the
    software and have not exclusively licensed it to a third party; or
b.  to the extent they do not own the copyright, they have or can obtain
    permission from the copyright owner(s) to do so

(the **Rights Clearance Principle**). It can be important, in this
context, to check whether developers have reused tracts of code from
elsewhere and, if they have, to assess the licences that apply to those
tracts to ensure the agency has all the rights it needs.

<a style="text-align right;" href="#top"><strong>&uarr;Top</strong></a>


## Exceptions

**18.** The Open Access and Licensing Principle does not apply where:

a.  **civil wrongs**: open source licensing of the software would
    constitute a breach of contract, breach of confidence, breach of
    privacy, disclosure of a trade secret or other actionable wrong;
b.  **commercial interests**: open source licensing of the software
    would be contrary to an agency's own or the Government's legitimate
    commercial interests (note, however, that most government agencies
    are not in the business of commercialising developed software);
c.  **security or privacy risk**: release of the software on open source
    terms would create an unacceptable security risk (whether to an
    agency, organisation or individuals) or an unacceptable
    privacy-related risk.

<a style="text-align right;" href="#top"><strong>&uarr;Top</strong></a>

## Adaptations

**19.** In the course of its activities, an agency may incorporate or
adapt pre-existing software source code that is licensed under one or
more FOSS licences. Alternatively, an agency may produce new software
source code that interacts with a pre-existing FOSS-licensed
application. Take a plug-in or extension to an existing application as
an example. Depending on the context, a plug-in or extension may be an
adaptation of pre-existing source code (e.g., where it has forked an old
plug-in or extension) or it may be new source code designed to interact
with a pre-existing application but without taking any pre-existing
source code. If an agency proposes to release its source code in these
kinds of situations, the agency should:

a.  respect the terms and conditions of the existing licences (such as
    attribution requirements); and
b.  where possible, use the same free and open source licence or
    licences applying to the pre-existing software source code, even in
    cases where - strictly speaking - it is not required to do so

(the **Respect Existing Licences Principle**).

**20.** It is important to note that using more permissively-licensed
source code (e.g., MIT-licensed source code) and
sharealike/copyleft-licensed source code (e.g., GPL-licensed source
code) together in a broader project may require you to release your new
source code under the same sharealike/copyleft licence or a compatible
licence (in most cases the licence will be version 2 or 3 of the
GPL)[^10] rather than under the more
permissive licence. Whether this is the case depends on the
circumstances. Legal advice should be sought if required.

[^10]: Whilst versions 2 and 3 of the GPL differ in certain respects, in
essence the GPL allows people to copy and distribute the software,
to charge a fee for transferring it or providing warranty
protection, and to modify the software and distribute resulting
derivative works. And, if a person distributes a derivative work,
that person needs to license it under the GPL, otherwise that
person's licence to use the software will terminate. The full text
of versions 2 and 3 of the GPL (both versions are in common use) can
be found on the website of the *Free Software Foundation* at
[*http://www.gnu.org/licenses/gpl-3.0.en.html*](http://www.gnu.org/licenses/gpl-3.0.en.html).

**21.** Difficult legal questions can arise as to whether a given piece
of developed software, that in some way leverages or interacts with
other software, is in fact an adaptation or derivative of that software.
If:

a.  an agency's developed software does leverage or interact with other
    software; and
b.  that other software, or part of it, is software owned by a third
    party that has been released under a sharealike open source software
    licence like the GPL,

the agency should be cautious about concluding that its developed
software is *not* an adaptation or derivative of the other software. The
need for caution arises because if the agency concludes mistakenly that
the developed software is not an adaptation, release of the developed
software under an incorrect licence could result in the agency breaching
third party rights and expose it to the risk of complaint or legal
action. End users would also be at risk of breaching third party rights
and be exposed to the risk of complaint or legal action. If an agency is
in any doubt on this issue, it should seek specialist advice (which
could be both technical and legal) before releasing the software for
re-use.

<a style="text-align right;" href="#top"><strong>&uarr;Top</strong></a>

## Security code review

**22.** Before releasing software for re-use, agencies should:

a.  consider whether there is any prospect that the code or associated
    files may contain sensitive elements that may need to be removed
    prior to release; and
b.  if there is such prospect, have the code and any associated files
    security-reviewed before release.

<a style="text-align right;" href="#top"><strong>&uarr;Top</strong></a>


## No additional controls or discrimination

**23.** When releasing developed software under an open source software
licence, agencies must not seek to impose controls or requirements,
whether contractual or otherwise, that are inconsistent with the
freedoms or permissions granted by the selected licence. For example,
agencies are *not* able to license software under an open source
software licence and then seek to discriminate between individual,
not-for-profit and commercial uses of the software.

<a style="text-align right;" href="#top"><strong>&uarr;Top</strong></a>


## No charging

**24.** Government agencies that release software under open source
software licences should not seek to charge people for access to the
software.

<a style="text-align right;" href="#top"><strong>&uarr;Top</strong></a>


## Updating FOSS licensed software

**25.** If an agency:

a.  publicly releases software on open source terms; and
b.  subsequently identifies a bug or other issue with the software that
    could have a material adverse effect on users of the software, the
    agency should (subject to paragraph 26):
c.  consider whether to inform users of the software of the bug or other
    issue (e.g., by adding a notice to the repository, site or service
    that contains the software files); and
d.  if the agency has rectified the bug or other issue for its own
    purposes, release the updated file(s) to the relevant repository,
    site or service.

**26.** If the agency is aware:

a.  of a bug or other issue that creates a risk to the security of sites
    or services using the software or to the confidentiality or privacy
    of information held by those sites or services; and
b.  that other government agencies are using the software,

the agency should inform the Government Chief Information Officer (and
where relevant the Government Chief Privacy Officer and Office of the
Privacy Commissioner) as soon as possible, take all reasonable steps to
inform the other agencies of the risk and give them time to mitigate the
risk before making any public announcement that could result in people
with malicious intent or crackers[^11]
exploiting the bug or other issue. Agencies may also wish to consider
including a Coordinated Disclosure Policy[^12] in an accompanying "contributing" file to set expectations
as to how the reporting of security risks ought to be handled.

[^11]: See the Internet Security Glossary, Version 2 on Crackers
[*https://tools.ietf.org/html/rfc4949\#page-84*](media/image2.emf#page-84)

[^12]: Coordinated disclosures ensure there is clear and explicit process
for both external contributors and agencies for the reporting of
security bugs and issues in publicly released software. Guidance for
the New Zealand context can be found on the NZITF website at
[*http://www.nzitf.org.nz/pdf/NZITF\_Disclosure\_Guidelines\_2014.pdf*](http://www.nzitf.org.nz/pdf/NZITF_Disclosure_Guidelines_2014.pdf).

<a style="text-align right;" href="#top"><strong>&uarr;Top</strong></a>


## Contributions

### Agency contribution to FOSS communities

**27.** Where an agency has re-used and adapted pre-existing free and
open source software source code or has developed new code to interact
with free and open source software source code, the agency should:

a.  consider asking the free and open source software community or the
    software source code owners whether any agency adapted feature or
    improvements or the agency's new source code would generally be
    re-usable by others (if this isn't already clear);
b.  if so, contribute their adapted or new source code back to the free
    and open source software community project unless an exception
    listed in paragraph 18 applies; and
c.  avoid using a diverging fork[^13]
    copy of the software source code when it could reasonably use the
    upstream source code and contribute agency adaptations of it back to
    the community for general re-use

(the **Contribute to FOSS Communities Principle**).

[^13]: A diverging code fork occurs when agencies make changes to the code
of open source software without publishing the code back to the
software's development community. The fork is the split between the
agency's version of the software and the version published by
the community. Any further changes made by either the agency or the
community will increase the differences of the source code. This can
make it difficult for the agency to upgrade to a new published
version, as the agency would have to reapply all its changes. This
risk may be mitigated by contributing modified source code back to
the open source software community if appropriate.

### Agency acceptance of contributions from others

*Contribution guidance and files*

**28.** Part of the value of releasing free and open source software in
accordance with the Open Access and Licensing Principle is that external
contributors can re-use and contribute back improvements to
agency-released software source code. To accept contributions from
external contributors in a manner that enables contributions to be
licensed properly and shared with others, agencies should consider
providing explicit contribution guidance to users that:

a.  explains any technical aspects of making the contributions;
b.  sets expectations for users as to how the agency will review and
    accept contributions of source code;
c.  sets out any code of conduct, moderation policy or terms of use that
    apply when external contributors engage publicly in discussions
    about the agency-released software source code;
d.  indicates whether external contributors need to physically sign and
    return a contributor licence agreement[^14] or other document before the agency will accept
    contributions from them, or specifies that the act of contributing
    source code means the contributing user is agreeing to license his
    or her contributions to the agency and others under a specified FOSS
    licence; and
e.  ensures that users know that they must own the copyright in their
    contributions or be permitted to license them to the agency and
    others under the licence that the agency specifies (this is
    important as it seeks to mitigate the risk of the agency accepting
    and publishing external contributions that, for copyright reasons,
    should not be accepted and published).

[^14]: A Contributor Licence Agreement, or CLA, is an agreement that sets
out the terms under which a person or entity makes contributions to
the project or software. A CLA will deal with licensing terms and
can also agree with topics such as warranties and indemnities.

**29.** In the open source software context, a common means of providing
this contribution guidance to users is by including a 'contributing'
file in documentation that accompanies the source code. It is important
that this file (or other document if an alternative approach is used) is
brought to the attention of users before or at the time they submit
contributions. Some source code repositories bring the existence of a
'contributing' file to the attention of users at the time of submission
but if an agency is not using such a repository it should take care to
ensure the terms of contribution are brought to users' attention.

**30.** Whilst this is a decision for agencies, NZGOAL-SE suggests that
it will usually be unnecessary, administratively burdensome and
potentially counterproductive to require contributing users to
physically sign and return a formal contributor licence agreement or
other document. In most cases agencies will be able to secure the rights
they need, with sufficient confidence, by including the 'contributing'
file mentioned above in documentation accompanying the source code and
ensuring that this file is brought to users' attention before or at the
time of submitting their contributions. Agencies should seek advice from
their legal teams if required.

*Comment on assignment versus licensing*

**31.** Agencies may wish to note that there are two ways in which an
agency could obtain the rights it needs from contributors. An agency
could require contributing users to assign (i.e., transfer) any
copyright in their contributions to the agency or it could require
contributors to license their contributions to the agency and others
under a specified FOSS licence. The advantage of seeking assignments of
copyright is that this enables the party maintaining the source code to
own it all. That makes it easier to take action against a user who does
not comply with the applicable FOSS licence terms. The significant
disadvantage of seeking assignments of copyright is that it can inhibit
contributions (as developers may wish to retain their copyright). In a
government context, it could also be seen as 'over-reaching'. An
assignment also needs to be "in writing signed by or on behalf of the
assignor" (section 114 of the Copyright Act 1994). It will be evident
from the approach suggested above that NZGOAL-SE does *not* recommend
that agencies seek to obtain assignments of copyright in users'
contributions. Rather, the suggested approach allows contributors to
retain their own copyright and only requires them to license their
contributions under a specified FOSS licence.

*Suggested licensing text for 'contributing' file*

**32.** NZGOAL-SE suggests that agencies include the following kind of
licensing text in their 'contributing' file or other documentation that
they bring to the attention of users before or at the time of source
code submission (the content in square brackets needs to be completed):

    Copyright and licensing  

    The source code for this [name of project or software] is licensed under the [insert name of applicable free and open source software licence]. By contributing source code to this [name of project or software], you are agreeing to license your contributions under and on the terms of the [insert name of same licence]. Please note that your licence is irrevocable and royalty-free. You or your licensors retain any copyright in your contributions while allowing others to re-use the source code in any way they like as long as they meet the requirements of the licence.

**33.** Agencies may also wish to ensure that the 'contributing' file,
or other document that is brought to the attention of users, contains
the matters referred to in paragraph 28(a)-(e)
above.[^15]

[^15]: The 'contributing' file could also seek to obtain a
warranty (promise) from contributors that they have all the rights
they require to submit their contributions on the terms of the
specified licence and an indemnity in favour of the agency should it
turn out that the contributor does not have the required rights. The
indemnity clause would seek to enable the agency to recover, from a
contributor, loss the agency incurs as a result of the contributor's
breach of the warranty. NZGOAL-SE suggests, however, that including
an indemnity could be unnecessary and/or counter-productive. Not
only could it inhibit contributions but it could pose difficulties
for contributing government departments given restrictions on the
granting of indemnities under the Public Finance Act 1989.

<a style="text-align right;" href="#top"><strong>&uarr;Top</strong></a>


## Obtaining rights when procuring or commissioning the development of software

**34.** When procuring or commissioning the development of software,
government agencies should consider whether they may wish to release the
software to the public for re-use under an open source software licence.
If the answer is yes, agencies should consider the steps that may be
required as part of their procurement and contracting processes to
ensure that either:

a.  they have the relevant rights to release the software under an open
    source software licence; or
b.  that the developer will release the software under a specified open
    source software licence.

**35.** Such steps may include:

a.  ensuring the agency owns the intellectual property rights in the
    developed software; or
b.  ensuring the agency obtains a broad licence from the service
    provider allowing the agency to sub-license the software under the
    MIT licence or GPL (or, if required, some other free and open source
    software licence); or
c.  insisting on contractual provisions that require the service
    provider to release the software under a specified open source
    software licence (and, where relevant, to a specified
    code repository).

**36.** Taking these steps may require:

a.  the inclusion of appropriate paragraphs in a notice of procurement
    (where applicable); and/or
b.  the inclusion of specific contractual provisions in a draft
    contract; or
c.  where an existing panel supply arrangement is being used, a review
    of the intellectual property provisions in the panel contract and,
    if required and possible, amendments to them for the purposes of the
    software development in question; and
d.  ensuring that the contract does not include confidentiality
    provisions that would inadvertently prevent release of the software
    under an open source software licence.

<a style="text-align right;" href="#top"><strong>&uarr;Top</strong></a>


## Act fairly towards developers when drafting IP warranties and indemnities

**37.** If:

a.  a government agency is commissioning a service provider to develop
    software that is to be released on open source terms (either by the
    agency or by the service provider under a contractual obligation for
    the service provider to do so); and
b.  it is known that the developer will be leveraging or adapting
    existing open source software developed by others,

the agency should act fairly towards the service provider in relation to
the drafting of intellectual property warranties and indemnities.

**38.** In particular, it is generally considered unreasonable to expect
a service provider to give an unqualified intellectual property (**IP**)
warranty and an unqualified IP indemnity in relation to third party open
source software that the agency agrees can be used by the service
provider in developing software for the agency. This is especially so
when the agency will be releasing the developed software under an open
source software licence or requires the service provider to do so on its
behalf. Sample IP indemnity and IP warranty clauses are provided in the
Annexure to NZGOAL-SE.

<a style="text-align right;" href="#top"><strong>&uarr;Top</strong></a>


## Liability

**39.** The MIT licence and the GPL both contain broad disclaimers of
warranties and exclusions of liability that are widely known and
acknowledged and ought to protect releasing agencies from liability in
connection with the software they have released. In essence, people use
free and open source software at their own risk. Agencies should ensure
that all disclaimers and exclusions contained in the MIT licence or the
GPL (as applicable) are replicated when they release software under
these licences.

<a style="text-align right;" href="#top"><strong>&uarr;Top</strong></a>


## Review and Release Process

**40.** Government agencies should follow the NZGOAL-SE Review and
Release Process before publicly releasing and licensing their software
for re-use under a free and open source software licence. The Review and
Release Process is set out below.

<a style="text-align right;" href="#top"><strong>&uarr;Top</strong></a>
