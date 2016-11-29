---
title: Understanding copyright and licensing
description: Useful practices for government developers working with open source projects.
creator: Cam Findlay <cfindlay@linz.govt.nz>
publisher: Land Information New Zealand
subject: open source, copyright, licensing, GPL, MIT,
date: 2016-11-9
language: en
rights: CC BY-SA 4.0 [https://creativecommons.org/licenses/by-sa/4.0/](https://creativecommons.org/licenses/by-sa/4.0/)
---
{::options footnote_nr="14" /}

## Understanding copyright and licensing

As a developer working with open source projects, it’s important to have an understanding of copyright and licensing, how they differ and how you use them for open source release.

This section will give a simple overview of copyright, licensing and some considerations when contributing to open source projects or accepting contributions into your own government open source projects.

This section is not a substitute for robust legal advice and every edge case. For a fuller understanding of open source licensing please read over the [NZGOAL Software Extension](https://www.ict.govt.nz/guidance-and-resources/open-government/new-zealand-government-open-access-and-licensing-nzgoal-framework/nzgoal-se/).

### Copyright

Copyright is a set of property rights that automatically come into existence when you write software code. Copyright applies to the actual product of the work, not the idea to produce the work. Open source projects are grounded in copyright, there is an owner and this owner can decide what happens to the work, for example, licensing it under open source terms.

When you create work while employed or are commissioned to write software (as a contractor) then the owner of the copyright is the entity that you did the work on behalf of, you don’t personally hold the copyright in this situation.

In terms of code created in or on behalf of the New Zealand Government (the "Crown"), unless contracted out of ( that is, arrangements made in the contract to alter the default):

 "the Crown is the first owner of any copyright subsisting in any work created by a person who is employed or engaged by the Crown, under a contract of service, apprenticeship, or a contract for services" (Crown Copyright, 2014).

This is called ["Crown Copyright"](https://en.wikipedia.org/wiki/Crown_copyright#New_Zealand) and means the NZ Government as a whole owns the copyright in the code (and the agencies look after it on the Crown’s behalf).

Other agencies could make use of this Crown Copyright code, however Crown Copyright doesn’t apply to some organisations in Government. Crown Entities and State-owned Enterprises for example are excluded from Crown Copyright when they create works (in this case the Crown Entity itself is the copyright owner). In this situation , in order for the widest reuse across NZ Government in the simplest way, you can license the code using open source licences as set out in NZGOAL Software Extension.

### Licensing

Licensing is related to copyright but is a distinct concept. Licensing concerns itself with two things: who "owns" the code, and who has the right to use it. The author of software code holds the code's copyright (in terms of government this is usually Crown Copyright as mentioned above), and are the copyright holder. If they would like to let others reuse the code, they need to grant them a "license" to do so.

Open source licenses grant a set of rights normally reserved for the copyright holder (hence the term "all rights reserved" you often see in association with copyright) to another person. For instance, the right to use, copy, modify, or redistribute.

This license is provided in writing along with the code (in the LICENSE file) and states the terms under which the code may be used to the world at large, you don’t have to ask permission specifically. Most common licence types are the "copyleft" and the “permissive” and there are many licences you can use that fit into these two categories.

For government open source projects we recommend the use of one of two licenses, the GPL or the MIT. See [NZGOAL Review and release process](https://www.ict.govt.nz/guidance-and-resources/open-government/new-zealand-government-open-access-and-licensing-nzgoal-framework/nzgoal-se/nzgoal-se-review-and-release-process/) which sets out in more detail the legal aspects of selecting and applying an open source licence.

### Accepting contributions from the community

Project documentation should clearly state the license under which code is distributed and that any code publicly contributed to (e.g. pull requests, code comments or patches) must be licensed under the same terms. This is not uncommon in open source projects and is referred to as "terms of contribution" in a CONTRIBUTING file alongside the code.

Under such terms, either the individual contributor will retain the copyright, and their publicly distributed code is licensed under the same terms as the code they are contributing to. NZGOAL Software Extension recommends this approach and suggests the [following insert you can use in your CONTRIBUTING file](https://www.ict.govt.nz/guidance-and-resources/open-government/new-zealand-government-open-access-and-licensing-nzgoal-framework/nzgoal-se/#contributions):

```
The source code for this [name of project or software] is licensed under the [insert name of applicable free and open source software licence]. By contributing source code to this [name of project or software], you are agreeing to license your contributions under and on the terms of the [insert name of same licence]. Please note that your licence is irrevocable and royalty-free. You or your licensors retain any copyright in your contributions while allowing others to re-use the source code in any way they like as long as they meet the requirements of the licence.
```

Alternatively, the project maintainer may request that copyright be assigned to them at such time they will license the code under the same terms as the repository so the contributor can still make use of their contributions along with all other users. Note, NZGOAL Software Extension **doesn’t recommend this second approach** as it can been seen as "over-reaching" in its position as copyright holder of externally contributed code.

Either way the copyright is managed for contributions, the rights and freedoms of the shared code remain the same, all can reuse, copy, modify and redistribute because of the overall open source licence the project is released under allows this.

### What do contractors need to know about copyright and licensing?

As a contractor doing work for New Zealand Government agencies, it's important to be aware that unless you have explicitly stated in your services contract that you will be the owner of any copyright material you produce while working for the New Zealand public sector then the agency that commissions you to do the work, owns the copyright in the work you produce for them for the duration of the contract.

This is stated in legislation under the New Zealand Copyright Act 1994:

>_Where—_

>>1. _a person commissions, and pays or agrees to pay for ... the making of a computer program …  ; and_

>>2. _the work is made in pursuance of that commission,—_

>_that person is the first owner of any copyright in the work._

>_Subsections (2) and (3) apply subject to any agreement to the contrary._[^14]

[^14]: See http://www.legislation.govt.nz/act/public/1994/0143/latest/DLM345930.html

This is referred to as the *"commissioning rule"*

This is also mirrored in the New Zealand Government Model Contracts (GMC) that are commonly used when agencies hire contractors. The Intellectual Property section of this says:

>_12.2 New Intellectual Property Rights in the Deliverables become the property of the Buyer when they are created._[^15]

[^15]: See http://www.procurement.govt.nz/procurement/pdf-library/agencies/gmcs/gmc-form-1-services-_-schedule-2-2nd-edition-feb-2012-update

As a contractor then you need to ensure you have the agencies permission to release the code you work on under an open source licence. Remember, you need to own the copyright in order to grant freedoms under an open source licence.

### Alternative licensing options to NZGOAL-SE

[NZGOAL-SE puts forward a default set](https://www.ict.govt.nz/guidance-and-resources/open-government/new-zealand-government-open-access-and-licensing-nzgoal-framework/nzgoal-se/nzgoal-se-review-and-release-process/#stage-3-select-a-foss-licence) of well used open source software licenses for the release of government open source code. These are the GNU General Public Licence (GPL) and the Massachusetts Institute of Technology (MIT) licence. When licensing most new software as open source these two licences should cover most use cases.

There may be special cases where circumstances may require the use of an alternative open source software licence. NZGOAL-SE section 69 allows for this scenario by putting forward two alternative licences; the Lesser General Public Licence and the Affero General Public Licence; suggesting particular use cases as to when you might use these. You can also make use of any of the available open source licenses so long as you can justify why you would use these in place of the recommended default set (GPL or MIT) from NZGOAL-SE. Below are short descriptions of some of the alternative open source software licences you may opt to use and links to find out more information.

#### GNU Lesser General Public Licence (LGPL)

[https://opensource.org/licenses/LGPL-3.0](https://opensource.org/licenses/LGPL-3.0)

Permissions of this copyleft license are conditioned on making available complete source code of licensed works and modifications under the same license (LGPL) or the GPL. Copyright and license notices must be preserved. Contributors provide an express grant of patent rights. However, a larger work using the licensed work through interfaces provided by the licensed work may be distributed under different terms and without source code for the larger work.

An example use of LGPL is if the source code to be released is a library of code and the agency knows that there are proprietary software suppliers who wish to use the agency's particular library within, or to link the library to, their own proprietary source code without having to release (or it being argued that they have to release) their proprietary code if they distribute their software. The GNU Lesser General Public Licence (LGPL) will allow this kind of use without exposing the downstream user to risk. The LGPL requires software licensed under it to be modifiable by end users through source code availability and does not require proprietary code that is linked to the LGPL-licensed library to be made available under the GPL.

#### GNU Affero General Public Licence (AGPL)

[https://opensource.org/licenses/AGPL-3.0](https://opensource.org/licenses/AGPL-3.0)

This strong copyleft license is focused on making available complete source code of licensed works and modifications, which include larger works using a licensed work, under the same license (AGPL). Copyright and license notices must be preserved in the source code. Contributors provide an express grant of patent rights.

The sharealike obligation in the GPL (i.e., the obligation to license one's adaptations under the GPL) is triggered upon distribution of an adaptation. Where software is installed on a server to provide a service to end users (e.g., in an application service provider or cloud services context), the sharealike obligation is not triggered. To some people this seemed like a loophole.

The GNU Affero General Public Licence (AGPL) was designed to close that loophole. It is based on the GPL and states that if source code is adapted then the "public use of a modified version, on a publicly accessible server, gives the public access to the source code of the modified version".

There may be cases in which an agency is open source licensing software that is used on servers where the agency would like to achieve this result or where communities of interest ask the agency to achieve this result. If so, the agency may wish to select the GNU Affero General Public Licence (AGPL) instead of the GPL.

#### Apache Licence 2.0

[https://opensource.org/licenses/Apache-2.0](https://opensource.org/licenses/Apache-2.0)

A permissive license whose main conditions require preservation of copyright and license notices. Contributors provide an express grant of patent rights. Licensed works, modifications, and larger works may be distributed under different terms and without source code.

#### Mozilla Public Licence 2.0

[https://opensource.org/licenses/MPL-2.0](https://opensource.org/licenses/MPL-2.0)

Permissions of this weak copyleft license are conditioned on making available source code of licensed files and modifications of those files under the same license (or in certain cases, one of the GNU licenses). Copyright and license notices must be preserved. Contributors provide an express grant of patent rights. However, a larger work using the licensed work may be distributed under different terms and without source code for files added in the larger work.

#### Other license options and tools

[https://opensource.org/licenses/category](https://opensource.org/licenses/category)

[http://choosealicense.com/](http://choosealicense.com/licenses/)
