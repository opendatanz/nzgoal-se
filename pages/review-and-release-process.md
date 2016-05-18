---
layout: page
title: NZGOAL-SE Review and release process
permalink: /review-and-release-process/
description: "NZGOAL-SE Review and release process"
---
{::options footnote_nr="16" /}

## NZGOAL-SE Review and Release Process

### Introduction

##### 35

It is recommended that government agencies follow the review and release process set out below before releasing software source code for re-use under a free and open source software (FOSS) licence, with assistance where required from their technical and legal teams. The process consists of five main stages:

(a) copyright-related rights evaluation;

(b) evaluation of exceptions;

(c) select FOSS licence;

(d) application of the chosen licence; and

(e) release of the software.

##### 36

Each stage contains one or more issues that may need to be worked through. The stages and the issues within them reflect a mixture of the NZGOAL-SE Policy Principles, legal requirements and practical considerations.

##### 37

It can be important to work through these steps to ensure that the agency:

(a) has all relevant rights in or to the software source code it proposes to publicly release;

(b) uses the appropriate open source licence; and

(c) does not expose either itself or those who may re-use the released software to liability or related risk.

##### 38

A decision tree diagram for the review and release process is set out at paragraph 60 below.

### Stage 1: Copyright-related rights evaluation

#### What the stage involves

##### 39

The first stage involves:

(a) clearly identifying the boundaries of the software that the agency proposes to release (e.g., the software may comprise a range of files, all of which would need to be released together);

(b) determining whether that software constitutes or contains one or more copyright works; and, if so

(c) evaluating whether the agency has sufficient rights to license the software under open source terms in accordance with the Open Access and Licensing Principle.

##### 40

In the vast majority of cases, software that an agency wishes to license will constitute or contain one or more copyright works. In the unlikely event that a given piece of software does not constitute or contain one or more copyright works, an agency could, if no exception in Stage 2 applies, release it into the public domain using an NZGOAL-style “no known rights” statement. See NZGOAL for that statement. It is not discussed further in NZGOAL-SE.

#### Issues where agency does not own all copyright

##### 41

When an agency is in the situation of not owning all copyright in the software it would like to release and license for re-use and needs permission from the copyright owner(s), it is important to appreciate that the software may:

(a) be all new source code (i.e., be a completely new copyright work);[^16] or

(b) build on pre-existing source code (i.e., be an adaptation / derivative of pre-existing source code).

[^16]: For example, the software could be a deliverable under a services contract the agency has with a vendor, but the contract may confer copyright ownership on the service provider and only license the software to the agency.

##### 42

The analysis for these two scenarios is different:

(a) **All new source code**: In the case of all new source code that the agency doesn’t own but wishes to license, the agency would need to either:

>(i) already be entitled, under a FOSS licence that the owner has recently applied to the software, to sub-license the software; or

>(ii) obtain irrevocable written permission from the copyright owner to sub-license the software on the relevant open source terms.

>**Notes on sub-licensing**: As to the first option, it is important to note three points. First, if the software has already been licensed under a FOSS licence, there may be no need for the agency to sub-license it because anyone who gets the software has the rights granted by the licence that the owner has applied. Second, some licences prohibit sub-licensing. For example, you cannot sub-license GPL-licensed software. Third, if there is a right to sub-license, that right would need to be broad enough to allow sub-licensing under the particular FOSS licence that the agency wishes to apply to the software.

(b) **Adaptation / derivative of pre-existing code**: In the case of an adaptation / derivative of pre-existing source code, the agency would need to:

>(i) be able to identify who owns the pre-existing source code (noting that there could be more than 1 owner/contributor) and who has made and owns the new copyright in the adaptation / derivative work; and

>(ii) to the extent that the agency does not own the copyright in the adaptation / derivative work, have permission from the other copyright owner(s) for their parts of the overall new work to be licensed under the FOSS licence the agency wishes to use.

To understand this, one needs to appreciate that an adaptation / derivative work consists of property (copyright) owned by the original licensor(s) (let’s call them A) plus new and separate property (copyright) over the new original parts of the adaptation / derivative work that are created by B. The adaptation / derivative work is a distinct copyright work in its own right but B doesn’t obtain property rights that are greater than B’s own contribution. As a United States court has put it, "[t]he aspects of a derivative work added by the derivative author are that author’s property, but the element drawn from the pre-existing work remains on grant from the owner of the pre-existing work".[^17]

Depending on the number of pre-existing owners, the licences (if any) under which they may have released their code and the licence the agency wishes to apply to the adaptation / derivative work, this can get complex very quickly. In cases of any complexity, agencies may need to seek expert legal advice.

[^17]: Stewart v Abend 495 U.S. 207, 223 (1990).

#### Common scenarios where an agency will not be able to license software for re-use

##### 43

There are certain scenarios in which, from a copyright perspective, an agency will not be able to license software either under _any_ FOSS licence or under a _particular_ FOSS licence. Three common scenarios are as follows:

(a) **third party owner**: copyright in the software is owned by a third party and the agency is not permitted to license the software for re-use under a FOSS licence. In this scenario the agency cannot license the software under any FOSS licence;

(b) **adaptations of proprietary software**: the software is an adaptation or derivative of proprietary software and the agency does not have the proprietary software owner’s written and irrevocable authorisation to license the adaptation or derivative under a FOSS licence (whilst the agency might own the copyright in its new contributions, it still needs authorisation from the owner of the base software that it adapted). In this scenario the agency cannot license the software under any FOSS licence; and

(c) **adaptations of GPL or similarly FOSS-licensed software**: the agency wishes to license the software under the MIT licence but the software is an adaptation or derivative of open source software that is licensed under a sharealike FOSS licence, such as the GPL, that requires distributed or conveyed adaptations or derivative works to be licensed under the same licence. In this scenario the agency cannot license its adaptation under the MIT licence.

### Stage 2: Evaluation of exceptions

##### 44

If an agency has completed Stage 1 and concluded that it does have sufficient rights to license the software under a FOSS licence, then the NZGOAL-SE Policy Principles recommend that the software be licensed under open source terms unless an exception set out in paragraph 18 applies.

##### 45

For each proposed release, the exceptions need to be considered in the light of all the surrounding circumstances relevant to the specific software and its release.

##### 46

In many instances, the exercise will be quick as none of the restrictions will apply. In that event, the agency can proceed to Stage 3 (Select a FOSS Licence) below. This is because the Open Access and Licensing Principle will not have been displaced.

##### 47

If one or more of the exceptions applies, the Open Access and Licensing Principle will be displaced and not apply. One of two consequences will follow:

(a) **No FOSS licensing**: FOSS licensing of the source code may not be possible unless the reason for the exception(s) can be removed in accordance with paragraph 47(b). If FOSS licensing is not possible, the analysis ends and there is no need to consider the subsequent stages below.

(b) **FOSS licensing after amending or anonymising the source code**: If the source code can be amended or altered to remove the reason(s) for the exception(s) applying, the Open Access and Licensing Principle is resurrected and one progresses to Stage 3.

### Stage 3: Select FOSS licence

#### Introduction

##### 48

Once an agency has determined that it has:

(a) the copyright-related rights it needs to license the software (in accordance with the Rights Clearance Principle); and

(b) none of the exceptions listed in paragraph 18 that would negate the Open Access and Licensing Principle applies,

the agency can work through Stage 3 to select the appropriate FOSS licence before applying the selected licence in accordance with Stage 4.

##### 49

In most cases, an agency's selection of a FOSS licence is likely to turn on the answers to one or more of the following questions:

(a) whether the source code builds upon and/or interacts with existing FOSS-licensed source code;

(b) if the source code does not build upon and/or interact with existing FOSS-licensed source code, whether a person who adapts the code and distributes it to others should be required to license the adaptations for re-use by others;

(c) whether there are known reasons or use cases for releasing the source code under a FOSS licence other than the recommended GPL or MIT licences.

NZGOAL-SE does recommend a default set of licences (GPL and MIT) but a "yes" answer to the first question may require (legally or ethically) the selection of a different FOSS licence and a "yes" answer to the third question might suggest that a more targeted FOSS licence is preferable. Each of the three questions is now discussed in turn.

#### Source code builds upon and/or interacts with existing third party FOSS-licensed source code - respect existing licence(s)

##### 50

If the source code builds upon and/or interacts with existing third party FOSS-licensed source code, the Respect Existing Licences Principle applies. In this scenario, an agency should - where possible - select the same licence(s) for its new software code as the licences applying to the pre-existing source code (the upstream licences), or licences that are compatible with the upstream licence(s). For consistency reasons, using the same licence(s) is usually preferable to using compatible licence(s).

To give an example, if an agency developed a software library that interacts with a pre-existing open source application licensed under the Berkley Software Distribution (BSD) licence[^18], it would be consistent with the Respect Existing Licences Principle for the agency to license its new source code under the BSD as well. Effectively, the BSD licence would become the selected FOSS licence as an outcome of the Stage 3 analysis.

Note, however, that words "where possible" are used above because it will not always be possible to apply the same licences as the upstream licences. This can be the case where different parts of the pre-existing software the agency has used are licensed under different FOSS licences. For example, some of the pre-existing code might be licensed under the MIT licence (which is not a sharealike / copyleft licence) and other parts of the code might be licensed under the GPL (which is a sharealike / copyleft licence).

Where an agency uses these differently licensed parts of software in a broader project (e.g., the agency might adapt the pre-existing software) the agency may be required, by the sharealike licence, to release its new code under the sharealike licence when the agency distributes its new code. In other words, a sharealike licence like the GPL may trump the non-sharealike licence (in this example, the MIT licence). Generally speaking, if an agency is using multiple pieces of software in a project and those pieces are licensed under different FOSS licences (non-sharealike and sharealike), new code should be released under the sharealike licence and not the non-sharealike licence. See the Adaptions Principle in paragraphs 19-20 for further explanation and, if in doubt, seek legal advice before selecting and applying a FOSS licence.

To give an example, if an agency develops and distributes a plugin for a content management system that, legally speaking, is an adaptation of MIT-licensed code and GPL-licensed code that the agency has mixed together and used, the agency may need to license the plugin under the GPL. Whether there is an "adaptation" can be a difficult legal question in some cases but, if there is an adaptation, the GPL will trump.

[^18]: See https://opensource.org/licenses/BSD-3-Clause   

#### Entirely new source code - default FOSS licences

##### 51

As noted above, NZGOAL-SE recommends a default set of licences  - two licences - for cases in which an agency wishes to release entirely new source code for re-use; in other words, for cases in which the source code to be released does not build upon and/or interact with existing FOSS-licensed source code.

The default licences, in no particular order, are the GPL licence and the MIT licence. These default licences and the reasons for selecting them as the NZGOAL-SE defaults are described in the NZGOAL Policy Principles (Open access and public release of agency software using free and open source licences).

NZGOAL-SE suggests that an agency's choice between these two default licences should turn on the answer to this simple question: should a person who adapts the code and distributes it to others be required to license the adaptations for re-use by others.

If the answer to this question is yes - a person who adapts the code and distributes it to others should be required to license the adaptations for re-use by others - then the agency should select the GPL (version 3).

If the answer to this question is no - a person who adapts the code and distributes it to others does not need to license the adaptations for re-use by others - then the agency should select the MIT licence.

Answering the question yes or no is a judgement call for the agency.

In either case, the agency should proceed to Stage 4 (Application of chosen licence) unless there are known reasons or use cases for releasing the source code under a FOSS licence other than the recommended GPL or MIT licences (as discussed immediately below).

#### Known reasons or use cases for releasing source code under an alternative FOSS licence

##### 52

In some cases an agency may wish to release entirely new source code and there may be specific known reasons or use cases for not opting for the GPL or MIT licences. Two examples of this are as follows:

**Libraries**: the source code to be released is a library of code and the agency knows that there are proprietary software suppliers who wish to use the agency's particular library within, or to link the library to, their own proprietary source code without having to release (or it being argued that they have to release) their proprietary code if they distribute their software. The GNU Lesser General Public Licence (LGPL) will allow this kind of use without exposing the downstream user to risk. The LGPL requires software licensed under it to be modifiable by end users through source code availability and does not require proprietary code that is linked to the LGPL-licensed library to be made available under the GPL.

**Server side use of licensed software**: the sharealike obligation in the GPL (i.e., the obligation to license one's adaptations under the GPL) is triggered upon distribution of an adaptation. Where software is installed on a server to provide a service to end users (e.g., in an application service provider or cloud services context), the sharealike obligation is not triggered. To some people this seemed like a loophole. The GNU Affero General Public Licence (AGPL) was designed to close that loophole. It is based on the GPL and sates that if source code is adapted then the "public use of a modified version, on a publicly accessible server, gives the public access to the source code of the modified version".[^19] There may be cases in which an agency is FOSS-licensing software that is used on servers where the agency would like to achieve this result or where communities of interest ask the agency to achieve this result. If so, the agency may wish to select the GNU Affero General Public Licence (AGPL) instead of the GPL.

The selection of licences for unusual use cases like these can be difficult and in some cases using one of the NZGOAL-SE default licences (the GPL or MIT licence) may suffice. If in doubt, seek technical or legal advice in the context of your particular use case.

[^19]: See AGPL Preample [http://www.gnu.org/licenses/agpl.html](http://www.gnu.org/licenses/agpl.html)

#### Licensing of accompanying documentation

##### 53

Explanatory documentation files included alongside open source software code are usually separate copyright works. These works are often thought to be licenced under the FOSS licence that has been applied to the source code. However, most FOSS licences used for source code are not designed for documentation and often don't naturally or comfortably apply. A more appropriate approach is to apply a Creative Commons licence to documentation in accordance with NZGOAL.

Two situations need to be considered: the first is where the agency has created completely new documentation, the second where the agency has adapted pre-existing documentation.

**New documentation**

In the case of new documentation that the agency owns (i.e., it owns the copyright), the Creative Commons licensing is straight-forward. In this situation, NZGOAL-SE recommends that the Creative Commons licence choice reflect the nature of the selected FOSS licence. This means that an agency releasing new documentation alongside source code released under:

(a) a _more permissive licence_ such as the MIT licence, should license the documentation under a **Creative Commons Attribution 4.0 International licence**; and

(b) a _sharealike/copyleft licence_ such as the GPL, should license the documentation under a **Creative Commons Attribution Sharealike 4.0 International licence**.

**Adapted documentation**

If an agency is adapting pre-existing documentation that accompanied pre-existing FOSS-licensed software, it may be necessary to respect the licence (if any) that had been applied to the pre-existing documentation. For example, if the pre-existing documentation had been licensed under a Creative Commons Attribution Sharealike (CC-BY-SA) 4.0 International licence then, when the agency publishes its adaptation, it would need to license the adaptation under a CC-BY-SA licence.

Sometimes an agency may find that existing documentation is licensed under an unfamiliar or unnecessarily complex licence. The agency may still wish to release its own documentation relating to, for example, its adapted part of the software, but the agency would prefer to use a Creative Commons licence for it. In this situation the agency may be able to create a new and separate document that contains the additional information the agency wishes to provide. That in all likelihood would be a new and standalone copyright work rather than an adaptation of an existing work. In that case, and assuming the agency owns the copyright in the new document, it could select a Creative Commons licence for the document.  


### Stage 4: Application of chosen licence[^20]

[^20]: For a useful general discussion of this topic, see the Software Freedom Law Center’s "Managing copyright information within a free software project" at [http://softwarefreedom.org/resources/2012/ManagingCopyrightInformation.html](http://softwarefreedom.org/resources/2012/ManagingCopyrightInformation.html])

#### Introduction

##### 54

Stage 4 explains how agencies apply their chosen open source software licence to the software they’re releasing.

Copyright and licensing statements for FOSS software generally comprise:

(a) a statement of copyright ownership; and

(b) a description of the FOSS licence that applies to the software.

They appear in the same place but are considered seperately here to explain certain points.

#### The copyright notice

##### 55

When applying a licence, it is common practice to add the year the software was completed and the name of the copyright owner(s), in the following format:

```
Copyright (c) <year> <copyright holders>
```

If the licensing agency is a department of the Crown, it should also replace “Copyright” with “Crown copyright”. For example, if the licensing agency were a department, its licensing statement would look something like this:

```
Crown copyright (c) 2015, Land Information New Zealand on behalf of the New Zealand Government.
```

If the licensing agency is not part of the Crown (e.g., it might be a Crown entity), it would use the term “Copyright” rather than “Crown copyright” and it would state its name without reference to the “New Zealand Government”. For example:

```
Copyright (c) 2015, Commerce Commission (New Zealand).
```

#### Description of the FOSS licence that applies

##### 56

The description of the FOSS licence that applies to the software either sets out the full terms of the FOSS licence or refers to the applicable licence and links to full text of the licence. The description may also contain statements that exclude warranties and liabilities. Examples can be seen in the next part of this Stage 4 below.

#### Applying the selected licence

##### 57

Agencies can apply their selected licence in one of two ways:

(a) They can reproduce the full text of the licence, or a summary with a link to the full licence, at the top of each source code file they are licensing.

>Example 1: if the licensing agency were a department and had selected the MIT licence, its licensing statement at the top of each source code file would look like this:

```
MIT Licence

Crown copyright (c) 2015, Land Information New Zealand on behalf of the New Zealand Government.

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
```

>Example 2: if the licensing agency were a Crown entity and had selected the GPL[^21] licence, its licensing statement at the top of each source code file would look like this:

```
Copyright (c) 2015, Commerce Commission (New Zealand).

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>
```

(b) Alternatively, agencies can provide the licence as a separate text file (which would contain the full licence text) that accompanies the software files, usually in a top-level folder. If agencies take this approach:

>(i) the text file containing all the licensing text should be called “LICENCE” (or something similar); and

>(ii) the first paragraph of the licensing text that identifies the licensor should also identify the software to which the licence is being applied, e.g.:

>```
SpatialZone Project, Crown copyright (c) 2015, Land Information New Zealand on behalf of the New Zealand Government.
```

>Note that, under this approach, if a single software file is separated from the distribution, the recipient is unlikely to see the applicable copyright notice. If this is of concern to an agency, the solution is to include a brief copyright notice in each file’s header that points to the top-level LICENSING file. For example:

>```
SpatialZone Project, Crown copyright (c) 2015, Land Information New Zealand on behalf of the New Zealand Government. This file is released under the <LICENCE> licence. See the LICENCE file found in the top-level directory of this distribution for more information.
```

[^21]: See "How to use GNU licenses for your own software" at [http://www.gnu.org/licenses/gpl-howto.html](http://www.gnu.org/licenses/gpl-howto.html)

#### Other licences

##### 58

If for some reason you are applying an alternative open source software licence, you may wish to check whether the entity that maintains the licence has instructions on how to apply it. Alternatively, you could follow the approach suggested above for the MIT licence or the Free Software Foundation’s suggested approach for the GPL.

### Stage 5: Release the software

##### 59

Once the chosen licence has been applied to the software, release the software for re-use into one or more relevant code repositories and/or on the agency’s website. Agencies are encouraged to:

(a) use version control and existing source code repositories;

(b) ensure the source code is publicly accessible;

(c) use freely available tools for others to interact with the released source code;

(d) include a CONTRIBUTING file to help others contribute to the source code and improve it as explained in the Contributions Principle;

(e) include accompanying documentation such as a README file to help others get started re-using the software; and

(f) consider whether to:

>(i) issue a press release about the agency's release of the software; and/or

>(ii) notify appropriate communities of interest.

### Review and release process decision tree

##### 60

The decision tree diagram below illustrates the Review and Release Process explained above. It is intended to be read in conjunction with the explanations above for each stage.

[NZGOAL-SE Review and release process - decision tree](https://opendatanz.github.io/nzgoal-se/assets/images/nzgoal-se-decision-tree-revision.png)
