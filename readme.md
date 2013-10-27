# (Greek) Slug Generator

```GreekSlugGenerator``` is a [slug](http://en.wikipedia.org/wiki/Slug_(web_publishing\)#Slug) (pretty URL) generator, which supports Greek UTF-8 encoded characters, and generates a slug based on strings which are typically titles of pages or articles.

**The class can be used for English-only titles as well.**

If a Greek character is found, it is converted to its English equivalent.

Spaces as well as some punctuation marks are converted to dashes, but if at any point multiple sequential dashes are produced, only one appears in the final slug.

## How to use & examples

```php
require_once('GreekSlugGenerator.php');

/* produces: the-class-can-be-used-for-english-only-titles-as-well */
echo GreekSlugGenerator::slugify('The class can be used for ENGLISH-ONLY titles as well');

/* produces: it-ignores-multiple-spaces-between-the-words */
echo GreekSlugGenerator::slugify('It   ignores   multiple   spaces   between   the   words');

/* produces: as-well-as-brackets-quotes-commas-and-full-stops */
echo GreekSlugGenerator::slugify('As well as brackets {[()]}, quotes `\'", commas, and full stops.');

/* produces: some-others-are-converted-in-dashes-but-if-at-any-point-multiple-sequential-dashes-are-produced-only-one-appears- */
echo GreekSlugGenerator::slugify('Some others are converted in dashes, but if at any point multiple sequential dashes are produced, only one appears: \/_-');

/* produces: greek-example-1-ekthesh-fwtografias-to-rethymno-kai-h-thalassa-hmeres-rethymnoy-2013 */
echo GreekSlugGenerator::slugify('Greek example #1: Έκθεση Φωτογραφίας «Το Ρέθυμνο και η Θάλασσα» - "Ημέρες Ρεθύμνου" 2013');

/* produces: greek-example-2-h-ekthesh-ksekinaei-thn-tetarth-08-05-2013-kai-wra-20-45-h-diarkeia-ths-ektheshs-tha-einai-apo-08-05-ews-07-06 */
echo GreekSlugGenerator::slugify('Greek example #2: Η έκθεση ξεκινάει την Τετάρτη 08/05/2013 και ώρα 20:45. Η διάρκεια της έκθεσης θα είναι από 08/05 έως 07/06');
```
