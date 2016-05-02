---
layout: page
title: NZGOAL-SE Policy principles
permalink: /policy-principles/
description: "NZGOAL-SE Policy principles"
---
{::options footnote_nr="6" /}

## NZGOAL-SE Policy Principles

### Introduction 

##### 13

Government agencies are strongly encouraged to apply the following Policy Principles in relation to publicly releasing and licensing their software on open source terms. The Principles should be read in their entirety but here’s a summary :

| **Policy Principle**                                                             | **Summary**                                                                                                                                                                                                                                                             |
|----------------------------------------------------------------------------------|-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| Public release and open licensing of agency software with MIT licence as default | License software with a fully permissive OSS licence. The MIT licence is the recommended licence.                                                                                                                                                                       |
| Ensuring copyright ownership or right to sub-license                             | Make sure your agency has the required copyright-related rights to license the software.                                                                                                                                                                                |
| Exceptions                                                                       | The default MIT licensing does not apply where an exception applies.                                                                                                                                                                                                    |
| Adaptations                                                                      | Be careful when considering whether you’re adapting pre-existing software.                                                                                                                                                                                              |
| Alternative OSS licensing                                                        | Where the default MIT licensing does not apply due to an upstream OSS licensing obligation (e.g., under the GPL), license with upstream licence. Where the agency has a compelling reason for sharealike licensing, license with the GPL (or a GPL-compatible licence). |
| Potential stifling effect of sharealike licensing                                | Beware that sharealike licensing (when not required) may appear paternalistic and/or be commercially inhibiting.                                                                                                                                                        |
| Security code review                                                             | Consider whether a security code review is required to identify sensitive elements that may need to be removed.                                                                                                                                                         |
| No additional controls or discrimination                                         | Do not seek to impose requirements that are inconsistent with the freedoms in the chosen OSS licence.                                                                                                                                                                   |
| No charging                                                                      | Do not charge people for access to OSS-licensed software.                                                                                                                                                                                                               |
| Updating open source licensed software                                           | If you spot a bug with software you’ve licensed, consider informing users and, if you fix the bug, release the updated files. Take appropriate action if there’s a security risk.                                                                                       |
| Code forking                                                                     | If you take and modify open source licensed software, you should contribute the modified software back to the open source community.                                                                                                                                    |
| Obtaining rights when procuring or commissioning the development of software     | If you commission the development of software that you want to OSS-license, make sure you obtain the rights to license it on OSS terms.                                                                                                                                 |
| Act fairly towards developers when drafting IP warranties and indemnities        | If you commission the development of software that uses pre-existing third party OSS-licensed software and/or that you may OSS-license, act fairly in relation to IP warranties and indemnities.                                                                        |
| Liability                                                                        | Replicate all disclaimers and exclusions contained in the relevant OSS licence when you release software under that licence.                                                                                                                                            |
| Review and Release Process                                                       | Follow the NZGOAL-SE Review and Release Process.                                                                                                                                                                                                                        |

Each Policy Principle is set out below.


### Public release and open licensing of agency software with MIT licence as default 

##### 14

If government agencies have the required copyright-related rights to do so, they should make their software, that is or may be of interest or use to people, available for re-use under a fully permissive open source software licence, unless an exception in paragraph 20 applies (the **Permissive **Licensing** **Principle**). 

##### 15

For the purposes of NZGOAL-SE, the recommended fully permissive open source software licence is the **MIT licence**.[^6] This licence is a simple licence that grants people almost unlimited freedom with the software as long as they retain the copyright and licence notice and the disclaimer of warranties and liability. The full text of the MIT licence can be found on the website of the [Open Source Initiative](https://opensource.org/licenses/BSD-3-Clause). [^7].

[^6]: The MIT licence is considered preferable to the BSD 3-Clause licence (another commonly-used permissive open source software licence) because the MIT licence includes a clearer grant of rights and expressly includes the right to sub-license (the BSD licence does not). Whilst many interpret a right to sub-license as being implicit in the BSD licence, the absence of an express reference to it in the BSD licence could produce uncertainty for users, most notably users who wish to incorporate government-produced code in a work licensed under the GPL. The Free Software Foundation considers the BSD licence to be  ompatible with the GPL but that must depend on a particular interpretation of the BSD licence wording (see generally A Sinclair “License Profile: BSD” IFOSS Law Review, 2(1) pp. 1-6). The MIT licence doesn’t contain the BSD’s ‘no endorsement’ clause but, in most cases, the law would prevent claims of endorsement without permission anyway. Another common permissive licence, the Apache License 2.0, was not chosen because it is more complex. The Free Software Foundation considers it preferable to the BSD and MIT licences as it deals with patent licensing and prevents ‘patent treachery’. However, in New Zealand the Patents Act 2013 excludes computer programs "as such" from patentable subject matter (and, in any event, historically government agencies have not generally been in the business of applying for software patents). NZGOAL-SE could have recommended its own bespoke permissive licence instead of the MIT licence but that would have contributed to further licence proliferation and exposed developers to a licence they’re not familiar with.

[^7]: See [https://opensource.org/licenses/MIT](https://opensource.org/licenses/MIT)

### Ensuring copyright ownership or right to sub-license 

##### 16

Paragraph 14 makes it clear that, for the Permissive Licensing Principle to apply, an agency must have the required copyright-related rights to license the software.

##### 17

Agencies should only license software for re-use by others (whether under the MIT licence or any other open source software licence) where:

(a) they own or can obtain an assignment of all copyright in the software and have not exclusively licensed it to a third party; or

(b) to the extent they do not own the copyright, they have or can obtain permission from the copyright owner(s) to do so

(the **Rights Clearance Principle**). It can be important, in this context, to check that developers have not copied tracts of code from elsewhere. 

### Exceptions

##### 18

The Permissive Licensing Principle does not apply where:

(a) **civil wrongs**: open source licensing of the software would constitute a breach of contract, breach of confidence, breach of privacy, disclosure of a trade secret or other actionable wrong; 

(b) **commercial interests**: open source licensing of the software would be contrary to an agency’s own or the Government’s legitimate commercial interests (note, however, that most government agencies are not in the business of commercialising developed software); 

(c) **security** **or privacy** **risk**: release of the software on open source terms would create an unacceptable security risk (whether to an agency, organisation or individuals) or an unacceptable privacy-related risk; or

(d) **sharealike required**: the agency is either required or has compelling reason to license the software with a sharealike (copyleft) licence such as the GPL.[^8] For example:

>(i) the agency may be incorporating or adapting pre-existing code that is licensed under a sharealike open source software licence and therefore be required, by the licence’s reciprocity obligation, to licence the software under the same licence upon distribution; or

>(ii) the agency (either alone or with agencies and users) may have a genuine need for developments to the software to be shared with the developer community (when considering this situation, agencies should take into account the “Potential stifling effect of sharealike licensing" principle below).

[^8]: This form of licence requires those who make adaptations or derivatives of the software to license those adaptations or derivatives under the same licence when they distribute or convey their adaptations or derivatives.

### Adaptations

##### 19

Difficult legal questions can arise as to whether a given piece of developed software, that in some way leverages or interacts with other software, is an adaptation or derivative of that software. If:

(a) an agency’s developed software does leverage or interact with other software; and

(b) that other software is third party proprietary software or software owned by a third party that has been released under a sharealike open source software licence like the GPL,

the agency should be cautious about concluding that its developed software is _not_ an adaptation or derivative of the other software. The need for caution arises because if the agency concludes mistakenly that the developed software is not an adaptation, release of the developed software under the MIT licence could result in the agency breaching third party rights and expose it to the risk of complaint or legal action. End users would also be at risk of breaching third party rights and be exposed to the risk of complaint or legal action. If an agency is in any doubt on this issue, it should seek specialist advice (which could be both technical and legal) before releasing the software for re-use.

### Alternative OSS licensing

##### 20

Where the Permissive Licensing Principle does not apply because:

(a) the software is an adaptation or derivative of open source software that is licensed under a sharealike OSS licence, the agency should release the software and license it under the same sharealike OSS licence (in most cases the licence will be version 2 or 3 of the GPL); or

(b) the agency has compelling reason for licensing the software with a sharealike licence, the agency should release the software under the GPL.

##### 21

Whilst versions 2 and 3 of the GPL differ in certain respects, in essence the GPL allows people to copy and distribute the software, to charge a fee for transferring it or providing warranty protection, and to modify the software and distribute resulting derivative works. But, if a person distributes his or her derivative work, that person needs to license it under the GPL, otherwise that person's licence to use the software will terminate. The full text of versions 2 and 3 of the GPL (both versions are in common use) can be found on the website of the [Free Software Foundation](http://www.gnu.org/licenses/gpl-3.0.en.html).[^9]

[^9]: See [http://www.gnu.org/licenses/gpl-3.0.en.html](http://www.gnu.org/licenses/gpl-3.0.en.html)

### Potential stifling effect of sharealike licensing

##### 22

When considering whether the second limb of the "sharealike required" exception to the Permissive Licensing Principle applies (the ‘genuine need’ limb), agencies should take into account the potential of a sharealike licence to:

(a) come across as paternalistic, in that the licensing agency is telling users what they can and cannot do with software that was developed with public funds (i.e., “you can use and develop the software but you can’t distribute your developments unless you allow others to do what they want with your developments”); and 

(b) have the adverse effect of stifling commercial development of the software by licensees. 

##### 23

In theory, sharealike obligations can inhibit commercial development because the licence would require the commercial developer to license its adapted software to others under the same terms when the software is distributed or conveyed. The concern some businesses (and others) have is that this would then enable anyone who obtains a copy of the software to copy, distribute, modify and/or sell it. That, in turn, could harm the developer’s commercial interests. In _some_ instances this concern may be overstated, in that what customers are really purchasing could be access to the developer’s support and maintenance and updates to the software, but this issue is one that divides segments of the open source community. It is for each agency to consider the veracity of such concerns in the context of the software in question and the circumstances surrounding its use.

### Security code review

##### 24

Before releasing software for re-use, agencies should:

(a) consider whether there is any prospect that the code or associated files may contain sensitive elements that may need to be removed prior to release; and

(b) if there is such prospect, have the code and any associated files security-reviewed before release.

### No additional controls or discrimination

##### 25

When releasing developed software under an open source software licence, agencies must not seek to impose controls or requirements, whether contractual or otherwise, that are inconsistent with the freedoms or permissions granted by the selected OSS licence. For example, agencies are _not_ able to license software under an open source software licence and then seek to discriminate between individual, not-for-profit and commercial uses of the software.

### No charging

##### 26

Government agencies that release software under open source software licences should not seek to charge people for access to the software.

### Updating open source licensed software

##### 27

If an agency:

(a) publicly releases software on open source terms; and 

(b) subsequently identifies a bug or other issue with the software that could have a material adverse effect on users of the software, 

the agency should (subject to paragraph 29):
 
(a) consider whether to inform users of the software of the bug or other issue (e.g., by adding a notice to the repository, site or service that contains the software files); and

(b) if the agency has rectified the bug or other issue for its own purposes, release the updated file(s) to the relevant repository, site or service.

##### 28

If the agency is aware:

(a) of a bug or other issue that creates a risk to the security of sites or services using the software or to the confidentiality or privacy of information held by those sites or services; and

(b) that other government agencies are using the software,

the agency should inform the Government Chief Information Officer (and where relevant the Government Chief Privacy Officer and Office of the Privacy Commissioner) as soon as possible, take all reasonable steps to inform the other agencies of the risk and give them time to mitigate the risk before making any public announcement that could result in malicious adversaries or crackers[^10] exploiting the bug or other issue.

[^10]: See the Internet Security Glossary, Version 2 on Crackers [https://tools.ietf.org/html/rfc4949#page-84](https://tools.ietf.org/html/rfc4949#page-84)

### Code forking[^11]

##### 29

Code forking occurs when agencies make changes to the code of open source software without publishing the code back to the software’s development community. The fork is the split between the agency’s version of the software and the version published by the community. Any further changes made by either the agency or the community will increase the fork. This can make it difficult for the agency to upgrade to a new published version, as the agency would have to reapply all its changes. This risk may be mitigated by contributing modified source code back to the open source software community. 

##### 30

Where an agency has taken and modified open source software, it should contribute the modified software back to the open source community unless there is a compelling reason not to do so.

[^11]: This principle is based in part on a discussion of code forking in the Australian Government's *A Guide to Open Source Software for Australian Government Agencies*, above n 1, but has been modified for the purposes of NZGOAL-SE. Most of the Australian Guide has been released under a Creative Commons Attribution 3.0 Australia licence: [http://creativecommons.org/licenses/by/3.0/au/](http://creativecommons.org/licenses/by/3.0/au/).

### Obtaining rights when procuring or commissioning the development of software

##### 31

When procuring or commissioning the development of software, government agencies should consider whether the software should, in accordance with these Policy Principles, be released to the public for re-use under an open source software licence. If the software should be released to the public for re-use under an open source software licence, government agencies should consider the steps that may be required as part of their procurement and contracting processes to ensure that either:

(a) they have the relevant rights to release the software under an open source software licence; or 

(b) that the developer will release the software under a specified open source software licence. 

Such steps may include:

(c) ensuring the agency owns the intellectual property rights in the developed software; or 

(d) ensuring the agency obtains a broad licence from the service provider allowing the agency to sub-license the software under the MIT licence or, where applicable, the GPL (or, if required, some other open source software licence); or

(e) insisting on contractual provisions that require the service provider to release the software under a specified open source software licence (and, where relevant, to a specified code respository).

Taking these steps may require:

(f) the inclusion of appropriate paragraphs in a notice of procurement (where applicable); and/or 

(g) the inclusion of specific contractual provisions in a draft contract; or

(h) where an existing panel supply arrangement is being used, a review of the intellectual property provisions in the panel contract and, if required and possible, amendments to them for the purposes of the software development in question; and

(i) ensuring that the contract does not include confidentiality provisions that would inadvertently prevent release of the software under an open source software licence.

##### 32

Paragraph 31 is subject to any statutory, policy or commercial imperatives to the contrary. 

##### 33

The Guidelines for the Treatment of Intellectual Property Rights in ICT Contracts are _not_ a policy imperative to the contrary. Rather, they – like NZGOAL-SE – are government policy for agencies to take into account at the time of procuring software. As explained at paragraph 11 above, those Guidelines and NZGOAL-SE are complimentary.

### Act fairly towards developers when drafting IP warranties and indemnities

##### 34

If:

(a) a government agency is commissioning a service provider to develop software that is to be released on open source terms (either by the agency or by the service provider under a contractual obligation for the service provider to do so); and 

(b) it is known that the developer will be leveraging or adapting existing open source software developed by others, 

the agency should act fairly towards the service provider in relation to the drafting of intellectual property warranties and indemnities. 

##### 35

In particular, it is generally considered unreasonable to expect a service provider to give an unqualified IP warranty and an unqualified IP indemnity in relation to third party open source software that the agency agrees can be used by the service provider in developing software for the agency. This is especially so when the agency will be releasing the developed software under an open source software licence or requires the service provider to do so on its behalf.

### Liability

##### 36

The MIT licence and the GPL both contain broad disclaimers of warranties and exclusions of liability that are widely known and acknowledged and ought to protect releasing agencies from liability in connection with the software they have released. In essence, people use open source software at their own risk. Agencies should ensure that all disclaimers and exclusions contained in the MIT licence or the GPL (as applicable) are replicated when they release software under these licences.

### Review and Release Process

##### 37

Government agencies should follow the NZGOAL-SE Review and Release Process before publicly releasing and licensing their software for re-use under an open source software licence. The Review and Release Process is set out below.
