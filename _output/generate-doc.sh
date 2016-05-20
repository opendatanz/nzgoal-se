#!/bin/bash

pandoc -f markdown -t docx --reference-docx ./template.docx -o ./NZGOAL-SE_Revision_May_2016.docx ./title-licence.md \
../pages/introduction.md \
../pages/legal-and-policy-context.md \
../pages/policy-principles.md \
../pages/review-and-release-process.md

echo "Generated DOCX"
