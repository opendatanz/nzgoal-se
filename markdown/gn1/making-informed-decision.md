---
title: Making an informed decision to release open source software
description: Motivations and concerns to consider to help make the decision to open source.
creator: Cam Findlay <cfindlay@linz.govt.nz>
publisher: Land Information New Zealand
subject: open source, procurement, intellectual property, copyright,
date: 2016-11-16
language: en
rights: CC BY 4.0 https://creativecommons.org/licenses/by/4.0/
---
{::options footnote_nr="2" /}

9 This Guidance Note advises agencies to weigh up potential motivations
for releasing software on open source terms alongside any concerns they
may have in relation to releasing on open source terms. Agencies may
also discover the potential value of the software code proposed during
the procurement process so it’s important to be open and communicate
well with respondents to notices of procurement.

10 Open source licensing of government procured software code in New
Zealand is **not mandated**. It’s left up to individual agencies to
consider and an informed decision to license their software on open
source terms.

11 Agencies are encouraged to document the rationale for their decisions,
regardless of whether they decide to release the procured software under
an open source software licence.

## What to consider?
12 Take into account that the default position in the IPR Guidelines is for
the supplier to own the copyright in newly procured software and then
consider:

 a. Your agency’s existing policies regarding open source software (if any).

 b. The benefits, exceptions and principles set out in NZGOAL-SE.

 c. Any insights gained from pre-market engagement.

 d. [The common myths surrounding open source software.](http://producingoss.com/en/open-source-and-the-organization.html#dispel-myths)

 e. The potential motivations and concerns set out below (which comprise the main body of this Guidance Note).

13 The final decision on whether to release procured software on open
source terms will depend on your agency’s particular circumstances and
the nature of the software in question.

## Motivations to release government open source software
14 The following sets out potential motivations for releasing procured
software (that an agency owns or has sufficient rights to release) under
an open source software licence.

### Newly developed software code is a public asset and can reduce duplication costs
15 One point of view is that newly developed, publicly-funded software should be treated as a public asset. Open source licensing allows legal reuse of this public asset and each reuse multiples the value of the public funds that contributed to its development (as the same code does not need to be developed more than once).

### Agency know-how may be embedded in the code itself and open source release may grow and attract IT talent   
16 In some cases your agency’s technical know-how and processes may be captured through their having been embedded into the developed software code. Where this is the case, open source licensing of this code may:

 a. facilitate ongoing access to and retention of this knowledge when technical staff move on, as having the code and documention in an open source software repository makes it more accessible (this can be particularly valuable in specialist knowledge domains in which there are limited practitioners); and

 b. releasing such code may help grow local IT talent and attract quality staff for an agency when required (being able to work on open source projects as part of one’s job can be a draw card and many organisations now look at developer candidates’ public code contributions as part of the technical recruitment process).

### More technical support options
17 Releasing code under an open source licence can allow a wider range of suppliers to study, develop and offer support services to agencies in relation to the code[^2]. This can also encourage competition in the market (as there is a choice of suppliers and low exit costs due to reduced vendor lock-in). Open source release in a public repository also maintains access to the code into the future should a supplier of this code stop trading or is acquired.

### The more code is reused, the more shared the maintenance efforts
18 A rule of thumb with open source software is that *what gets reused, gets maintained*. You might consider breaking down procured deliverables into modular components containing your agency's specific business logic (less desirable for others to reuse and potentially not suitable to open source license) and more generic components able to be built upon further by others (good candidates for open source licensing).

### You’d like to grow a community around your open source software                                             
19 An advantage of a growing open source community is that other users can help share the load of answering technical questions about the software. Don’t underestimate the effort required to build a thriving open source software community[^3]. You might consider starting small and increasing community engagement over time.

### Open software development can help improve the code quality                                                 
20 An open and transparent software development process releases code early and builds it up iteratively in a public repository. This process can be used to help catch bugs, make it easier to maintain over time and improve reliability of the software[^4].

### Transparency of software code can build trust in government systems                                         
21 It can be important for citizens to be able to see how something they interact with works and that, in turn, may foster trust that they are being treated fairly.

Take for example, a digital public service that provides a calculation. If the business rules or calculations are not sensitive and do not raise any identifiable security or privacy risk then the code that produces the calculation could be released on open source terms.

An added benefit of this is that having calculations expressed in reusable code can improve consistency of this calculation across a range of software, both open source and proprietary. In some cases open source can also be used strategically to gain adoption of open standards and facilitate interoperability.

### Speed up government digital service provision                                                        
22 There is a move by governments internationally to what is referred to as a Government as a Platform[^5] approach to digital services delivery. Agencies combine modular and reusable components of software and open data to deliver digital government services to citizens more quickly and iteratively improve them over time[^6].Open source licensing makes the reuse of digital service delivery components easier by reducing the transaction costs of acquiring and assembling the required components to deliver digital services to the public. Currently, the New Zealand Government ICT Strategy and Action Plan can be seen as supporting this approach as it calls for more "common capabilities" and that "common service components are re-used by agencies"[^7].

## Concerns about open source licensing of software
23 The below sets out and assesses potential concerns agencies may have in relation to releasing procured software under an open source software licence.

### What about security and privacy?
24 Open source licensing of software code does not guarantee it will have superior security to code developed under a proprietary model or vice versa. A bug is a bug, and no software style is immune. However, making the code openly available may result in expert attention being given to it by experienced developers in the community that might not be available internally.

25 Releasing software code does not mean releasing data the software uses, configuration of the software in production or other sensitive credentials. Security or privacy-sensitive code or configuration layers should not be released and NZGOAL-SE recognises that it’s Open Access and Licensing Principle does not apply if release of the software on open source terms would create an unacceptable security risk or an unacceptable privacy-related risk. A key point to note here is that, through good design, it will often be possible to separate security or privacy-sensitive code or configuration layers (not to be released) from the rest of the code that can be released.

26 If there is an identifiable security risk or the code forms a critical system for government and exposes security enforcing functions[^8] you might consider not releasing the code. However, as noted, you may be able to isolate sensitive code from the more general reusable code, releasing only the latter under an open source licence.

### We don’t want to be burdened with maintenance time and contributor questions after the release
27 This concern may exist when you do not have an internal technical support team or if the team doesn’t have the experience with the software programming language used or may not have time to field questions from the community. You may be able to mitigate this concern by up-skilling or training but that may raise cost considerations and is a matter for each agency to decide.

28 Note that the Department of Internal Affairs or the Ministry of Business, Innovation & Employment may have a relevant common capability, syndicated or all-of-government contract in place that agencies can sign up to, without needing to conduct their own primary procurement exercise, if they wish to obtain support in relation to software they release. See ict.govt.nz and procurement.govt.nz for details.

29 If you do have a team that would be capable of supporting your released open source code, remember that you open source license your code, not your time and attention[^9] and that you can set expectations in your documentation for other contributors. Dialogue with contributors in open source projects are often informal in nature.

30 Note that, while you might be able to set expectations as to how frequently you will reply, some questions about the software may be considered requests for official information. In such cases the Official Information Act 1982 would usually apply.

31 Releasing your code doesn’t necessarily cause a flood of interaction to occur. Your commitment to interaction with the open source community may change over time if the software becomes well used. You could also consider using or relying upon trusted external contributors to help share the maintenance and answer questions.

### We’re worried about licensing legal obligations
32 NZGOAL-SE was created to help make the open source licensing process straightforward for government agencies. It includes a detailed set of principles, a review and release process and specimen contract clauses for IP indemnity and warranties agencies can insert into contracts with suppliers. Open source licensing is grounded in copyright, if you need assistance you should consider consulting your legal team.

### We need on-call support for critical issues
33 If you don’t have internal technical support for software you’re thinking of releasing under an open source software licence, you have the option of talking to suppliers in the market about providing this support for you. Suppliers can study the software and offer commercial service offerings (usually training and support) around it due to its openly accessible nature [^10].

### Suppliers might charge more if they don’t get to own the copyright or know that the software will be released for all under an open source software licence
34 While a valid concern, the IPR Guidelines are clear in stating that cost saving is usually not a sufficient reason for accepting a restricted licence (from supplier to agency) because accepting cost savings as a valid reason could:

  a. reward vendors for deliberately tendering an unrealistic all-of-government price while offering a realistic single agency licence price; or
  b. incentivise agencies to take a purely self-interested approach, at the expense of the government as a whole.

Suppliers may still be able to commercially exploit the software under the terms of the open source licence.

### It’s not in the national interest to release the software code on open source terms
35 You may consider that the open source release of government software might compete directly with and unfairly impact local technology suppliers who developed the code or who have a similar commercial offering. Note, however, that:
  a. local suppliers themselves would be able to make use of the software and compete on service provision rather than selling code; and
  b. releasing publicly funded software under an open source software  licence could accelerate and improve government digital services and (as noted above) be seen as aligning with the New Zealand Government ICT Strategy and Action Plan.

36 Potentially against that, another consideration is that accelerator[^11] or catalyst[^12] programmes and hackathon events[^13] are becoming more popular in driving better digital government services through the use of private-public initiatives and open government data[^14]. Private sector retention and exclusive commercial exploitation of software code produced through these may be an incentive for participants to take part (though some events require code to be open source licensed).

### What if a significant bug is found in the released code?
37 All open source licenses include liability exclusions and warranty disclaimers as part of the licence terms. They state that the party releasing the code will not be liable for the consequences of its use and that it is not giving any warranties in relation to the software.

38 In addition, the NZGOAL Software Extension provides [guidance you can follow](https://www.ict.govt.nz/guidance-and-resources/open-government/new-zealand-government-open-access-and-licensing-nzgoal-framework/nzgoal-se/nzgoal-se-policy-principles/#updating-foss-licensed-software) to help you responsibly correct and communicate the issue using a process called a Coordinated Disclosure[^15]. This process can help you to control and safely release sensitive changes reported by external contributors to your open source project.

[^2]: [http://www.dwheeler.com/oss\_fs\_why.html\#wont-destroy-industry](http://www.dwheeler.com/oss_fs_why.html#wont-destroy-industry)

[^3]: See
    [http://wenger-trayner.com/introduction-to-communities-of-practice/](http://wenger-trayner.com/introduction-to-communities-of-practice/)

[^4]: [http://www.dwheeler.com/oss\_fs\_why.html\#reliability](http://www.dwheeler.com/oss_fs_why.html#reliability)

[^5]: See
    [https://www.gov.uk/government/policies/government-as-a-platform](https://www.gov.uk/government/policies/government-as-a-platform)

[^6]: See page 10 of Ministry of Science Technology & Innovation.
    (2009). *Open source software and the public sector.* (Report by the
    National IT and Telecom Agency, Denmark, January 2009). Retrieved
    from
    <http://www.digst.dk/Servicemenu/English/IT-Architecture-and-Standards/Open-Source-Software/Open-Source-Software-and-the-Public-Sector>

[^7]: [*https://www.ict.govt.nz/strategy-and-action-plan/strategy/*](https://www.ict.govt.nz/strategy-and-action-plan/strategy/)

[^8]: GDS in the UK provides a useful blog post on the situations when
    they opt not to release open source code at
    [https://gds.blog.gov.uk/2014/10/08/when-is-it-ok-not-to-open-all-source-code/](https://gds.blog.gov.uk/2014/10/08/when-is-it-ok-not-to-open-all-source-code/)

[^9]: "[Dispel Myths Within Your
    Organization](http://producingoss.com/en/open-source-and-the-organization.html#dispel-myths)"
    by Karl Fogel used under [CC BY-SA
    4.0](https://creativecommons.org/licenses/by-sa/4.0/)

[^10]: [http://www.dwheeler.com/oss\_fs\_why.html\#wont-destroy-industry](http://www.dwheeler.com/oss_fs_why.html#wont-destroy-industry)

[^11]: [http://www.r9accelerator.co.nz/](http://www.r9accelerator.co.nz/)

[^12]: [http://datafutures.co.nz/our-work-2/catalyst-projects/](http://datafutures.co.nz/our-work-2/catalyst-projects/)

[^13]: [http://govhack.org.nz/](http://govhack.org.nz/)

[^14]: [https://www.ict.govt.nz/programmes-and-initiatives/open-and-transparent-government/\
    open-government-information-and-data-work-programm/](https://www.ict.govt.nz/programmes-and-initiatives/open-and-transparent-government/open-government-information-and-data-work-programm/)

[^15]: [http://www.nzitf.org.nz/pdf/NZITF\_Disclosure\_Guidelines\_2014.pdf](http://www.nzitf.org.nz/pdf/NZITF_Disclosure_Guidelines_2014.pdf)
