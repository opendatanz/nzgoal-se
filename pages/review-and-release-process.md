---
layout: page
title: NZGOAL-SE Review and release process
permalink: /review-and-release-process
description: "NZGOAL-SE Review and release process"
---
{::options footnote_nr="11" /}

## NZGOAL-SE Review and Release Process

### Introduction 

##### 38

It is recommended that government agencies follow the review and release process set out below before releasing software for re-use under an open source software licence, with assistance where required from their technical and legal teams. The process consists of five main stages:

(a) copyright-related rights evaluation;

(b) evaluation of exceptions;

(c) alternative OSS licensing;

(d) application of the chosen licence; and 

(e) release of the software.

##### 39

Each stage contains one or more issues that may need to be worked through. The stages and the issues within them reflect a mixture of the NZGOAL-SE Policy Principles, legal requirements and practical considerations. 

##### 40 

It can be important to work through these steps to ensure that the agency:

(a) has all relevant rights in or to the software it proposes to release;

(b) uses the appropriate open source software licence; and

(c) does not expose either itself or those who may re-use the released software to liability or related risk.

##### 41

A decision tree diagram for the review and release process is set out at paragraph 63 below. 

### Stage 1: Copyright-related rights evaluation 

#### What the stage involves

##### 42

The first stage involves:

(a) clearly identifying the boundaries of the software that the agency proposes to release (e.g., the software may comprise a range of files, all of which would need to be released together); 

(b) determining whether that software constitutes or contains one or more copyright works; and, if so

(c) evaluating whether the agency has sufficient rights to license the software under the MIT licence in accordance with the Permissive Licensing Principle. 

##### 43

In the vast majority of cases, software that an agency wishes to license will constitute or contain one or more copyright works. In the unlikely event that a given piece of software does not constitute or contain one or more copyright works, an agency could, if no exception in Stage 2 applies, release it into the public domain using an NZGOAL-style “no known rights” statement. See NZGOAL for that statement. It is not discussed further in NZGOAL-SE.

#### Issues where agency does not own all copyright

##### 44

When an agency is in the situation of not owning all copyright in the software it would like to release and license for re-use and needs permission from the copyright owner(s), it is important to appreciate that the software may:

(a) comprise all new code (i.e., be a completely new copyright work);[^11] or

(b) build on pre-existing code (i.e., be an adaptation / derivative of pre-existing code).

[^11]: For example, the software could be a deliverable under a services contract the agency has with a vendor, but the contract may confer copyright ownership on the service provider and only license the software to the agency.

##### 45

The analysis for these two scenarios is different:

(a) **All new code**: In the case of all new code that the agency doesn’t own but wishes to license, the agency would need to either:

>(i) already be entitled, under an open source software licence that the owner has recently applied to the software, to sub-license the software; or 

>(ii) obtain irrevocable written permission from the copyright owner to sub-license the software on the relevant open source software licence terms. 

>**Notes on sub-licensing**: As to the first option, it is important to note three points. First, if the software has already been licensed under an open source software licence, there may be no need for the agency to sub-license it because anyone who gets the software has the rights granted by the licence that the owner has applied. Second, some open source software licences prohibit sub-licensing. For example, you cannot sub-license GPL-licensed software. Third, if there is a right to sub-license, that right would need to be broad enough to allow sub-licensing under the particular open source software licence that the agency wishes to apply to the software. 

(b) **Adaptation / derivative of pre-existing code**: In the case of an adaptation / derivative of pre-existing code, the agency would need to:

>(i) be able to identify who owns the pre-existing code (noting that there could be more than 1 owner/contributor) and who has made and owns the new copyright in the adaptation / derivative work; and

>(ii) to the extent that the agency does not own the copyright in the adaptation / derivative work, have permission from the other copyright owner(s) for their parts of the overall new work to be licensed under the open source software licence the agency wishes to use.

To understand this, one needs to appreciate that an adaptation / derivative work consists of property (copyright) owned by the original licensor(s) (let’s call them A) plus new and separate property (copyright) over the new original parts of the adaptation / derivative work that are created by B. The derivative work is a distinct copyright work in its own right but B doesn’t obtain property rights that are greater than B’s own contribution. As a United States court has put it, "[t]he aspects of a derivative work added by the derivative author are that author’s property, but the element drawn from the pre-existing work remains on grant from the owner of the pre-existing work".[^12]

Depending on the number of pre-existing owners, the licences (if any) under which they may have released their code and the licence the agency wishes to apply to the adaptation / derivative work, this can get complex very quickly. In cases of any complexity, agencies may need to seek expert legal advice.

[^12]: Stewart v Abend 495 U.S. 207, 223 (1990).

#### Common scenarios where agency will not be able to license software under the MIT licence

##### 46

There are certain scenarios in which, from a copyright perspective, an agency will not be able to license software under the MIT licence. Three common scenarios are as follows: 

(a) **third party owner**: copyright in the software is owned by a third party and the agency is not permitted to license the software for re-use under the MIT licence;

(b) **adaptations of proprietary software**: the software is an adaptation or derivative of proprietary software and the agency does not have the proprietary software owner’s written and irrevocable authorisation to license the adaptation or derivative under the MIT licence (whilst the agency might own the copyright in its new contributions, it still needs authorisation from the owner of the base software that it adapted); and

(c) **adaptations of GPL or similarly open source licensed software**: the software is an adaptation or derivative of open source software that is licensed under a sharealike OSS licence, such as the GPL, that requires distributed or conveyed adaptations or derivative works to be licensed under the same licence.

### Stage 2: Evaluation of exceptions

##### 47

If an agency has completed Stage 1 and concluded that it does have sufficient rights to license the software under the MIT licence, then the NZGOAL-SE Policy Principles recommend that the software be licensed with the MIT licence unless an exception set out in paragraph 20 applies.

##### 48

For each proposed release, the exceptions need to be considered in the light of all the surrounding circumstances relevant to the specific software and its release. 

##### 49

In many instances, the exercise will be quick as none of the restrictions will apply. In that event, the agency can move to Stage 4 (Application of chosen licence) below. This is because the Permissive Licensing Principle will not have been displaced.

##### 50

If one or more of the exceptions applies, the Permissive Licensing Principle will be displaced and not apply. One of two consequences will follow:

(a) **No open sourcing licensing**: If the exception(s) that apply are any of those in paragraphs 20(a)-20(c) (civil wrongs, commercial interests and/or security or privacy risk), open source licensing of the software will in all likelihood not be possible, unless the software can be amended or altered to remove the reason(s) for the exception(s) applying. If open source licensing is not possible, the analysis ends and there is no need to consider the subsequent stages below. If the software can be amended or altered to remove the reason(s) for the exception(s) applying, the Permissive Licensing Principle is resurrected and one progresses to Stage 4.

(b) **Alternative open sourcing licensing**: if the exception in paragraph 20(d) applies (sharealike required), the software can instead be licensed under an open source software licence with a sharealike requirement. This then raises the question of which of the sharealike OSS licences should be used and that, in turn, takes one to Stage 3 (Alternative OSS licensing).

### Stage 3: Alternative OSS licensing

##### 51

Stage 3 only applies where the exception in paragraph 18(d) applies (sharealike required) and no other exceptions apply. If no exception applies, the agency should move to Stage 4 (Application of chosen licence).

##### 52

As noted in paragraph 18(d), a sharealike open source software licence may need to be applied either because:

(a) the agency is required to license the software under a particular sharealike licence (the agency may, for example, be adapting pre-existing software that has been licensed under a sharealike licence like the GPL); or  

(b) because the agency has a genuine need for developments to the software to be shared with the developer community.

##### 53

If the agency is required to license the software under a particular sharealike licence, it must license the software under that licence (failure to do so would likely result in the agency breaching third party rights). Where this is the case, the agency should proceed to Stage 4 (Application of chosen licence).

##### 54

If a sharealike open source software licence is to be applied because the agency has a genuine need for developments to the software to be shared with the developer community, the agency is encouraged to use either:

(a) the GPL (version 2 or 3, with version 3 being preferable); or

(b) a sharealike OSS licence that is GPL-compatible. 

##### 55

GPL-compatibility is important given the large volume of software that has been released under the GPL. The Free Software Foundation maintains a list of licences it considers to be GPL-compatible. Note that only some of these are sharealike (copyleft) licences.

### Stage 4: Application of chosen licence[^13]

[^13]: For a useful general discussion of this topic, see the Software Freedom Law Center’s "Managing copyright information within a free software project" at [http://softwarefreedom.org/resources/2012/ManagingCopyrightInformation.html](http://softwarefreedom.org/resources/2012/ManagingCopyrightInformation.html])

#### Introduction

##### 56

Stage 4 explains how agencies apply their chosen open source software licence to the software they’re releasing.

#### Applying the MIT licence

##### 57

This is the standard MIT licence:

```
MIT Licence	

Copyright (c) <year> <copyright holders>

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
```

##### 58

Agencies can apply the MIT licence in one of two ways:

(a) They can reproduce the full text of the licence above at the top of each software file they are licensing. When doing so, they need to add the year the software was completed and who the copyright holders are. If the licensing agency is a department of the Crown, it should also replace “Copyright” with “Crown copyright”. For example, if the licensing agency were a department, its licensing statement would look something like this:

```
MIT Licence	

Crown copyright (c) 2015, Land Information New Zealand on behalf of the New Zealand Government. 

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
```

If the licensing agency is not part of the Crown (e.g., it might be a Crown entity), it would use the term “Copyright” rather than “Crown copyright” and it would state its name without reference to the “New Zealand Government”. For example: 

```
Copyright (c) 2015, Commerce Commission (New Zealand).
```

(b) Alternatively, agencies can provide the licence as a separate text file (which would contain the full MIT licence text) that accompanies the software files, usually in a top-level folder. If agencies take this approach:

>(i) the text file containing all the licensing text should be called “LICENSING” (or something similar); and

>(ii) the first paragraph of the licensing text that identifies the licensor should also identify the software to which the licence is being applied, e.g.:

>```
SpatialZone Project, Crown copyright (c) 2015, Land Information New Zealand on behalf of the New Zealand Government.
```

>Note that, under this approach, if a single software file is separated from the distribution, the recipient is unlikely to see the applicable copyright notice. If this is of concern to an agency, the solution is to include a brief copyright notice in each file’s header that points to the top-level LICENSING file. For example:

>```
SpatialZone Project, Crown copyright (c) 2015, Land Information New Zealand on behalf of the New Zealand Government. This file is released under the MIT licence. See the LICENSING file found in the top-level directory of this distribution for more information. 
```

#### Applying the GPL

##### 59

Full instructions on how to apply can be found on the Free Software Foundation’s [website](http://www.gnu.org/licenses/gpl-howto.html).[^14]

[^14]: See "How to use GNU licenses for your own software" at [http://www.gnu.org/licenses/gpl-howto.html](http://www.gnu.org/licenses/gpl-howto.html)

#### Other licences

##### 60

If for some reason you are applying an alternative open source software licence, you may wish to check whether the entity that maintains the licence has instructions on how to apply it. Alternatively, you could follow the approach suggested above for the MIT licence or the Free Software Foundation’s suggested approach for the GPL. 

### Stage 5: Release the software

##### 61

Once the chosen licence has been applied to the software files, release the software for re-use into one or more relevant code repositories and/or on the agency’s website. Consider:

(a) using a version control repository like GitHub; and 

(b) whether to:

>(i) issue a press release about your release of the software; and/or

>(ii) notify appropriate communities of interest.


### Review and release process decision tree

##### 62

The decision tree diagram below illustrates the Review and Release Process explained above. It is intended to be read in conjunction with the explanations above for each stage.

![NZGOAL-SE Review and release process - decision tree](/nzgoal-se/assets/images/nzgoal-se-decision-tree-draft.png)