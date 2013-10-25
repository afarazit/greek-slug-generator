<?php

include('GreekSlugGenerator.php');

$slug_generator = new GreekSlugGenerator();

/* produces: the-class-can-be-used-for-english-only-titles-as-well */
echo $slug_generator->get_slug('The class can be used for ENGLISH-ONLY titles as well') . "\n";

/* produces: it-ignores-multiple-spaces-between-the-words */
echo $slug_generator->get_slug('It   ignores   multiple   spaces   between   the   words') . "\n";

/* produces: as-well-as-brackets-quotes-commas-and-full-stops */
echo $slug_generator->get_slug('As well as brackets {[()]}, quotes `\'", commas, and full stops.') . "\n";

/* produces: as_well_as_brackets_quotes_commas_and_full_stops */
echo $slug_generator->get_slug('As well as brackets {[()]}, quotes `\'", commas, and full stops.', '_') . "\n";

/* produces: some-others-are-converted-in-dashes-but-if-at-any-point-multiple-sequential-dashes-are-produced-only-one-appears- */
echo $slug_generator->get_slug('Some others are converted in dashes, but if at any point multiple sequential dashes are produced, only one appears: \/_-') . "\n";

/* produces: some_others_are_converted_in_dashes_but_if_at_any_point_multiple_sequential_dashes_are_produced_only_one_appears_ */
echo $slug_generator->get_slug('Some others are converted in dashes, but if at any point multiple sequential dashes are produced, only one appears: \/_-', '_') . "\n";

/* produces: greek-example-1-ekthesh-fwtografias-to-rethymno-kai-h-thalassa-hmeres-rethymnoy-2013 */
echo $slug_generator->get_slug('Greek example #1: Έκθεση Φωτογραφίας «Το Ρέθυμνο και η Θάλασσα» - "Ημέρες Ρεθύμνου" 2013'). "\n";

/* produces: greek_example_1_ekthesh_fwtografias_to_rethymno_kai_h_thalassa_hmeres_rethymnoy_2013 */
echo $slug_generator->get_slug('Greek example #1: Έκθεση Φωτογραφίας «Το Ρέθυμνο και η Θάλασσα» - "Ημέρες Ρεθύμνου" 2013','_'). "\n";

/* produces: greek-example-2-h-ekthesh-ksekinaei-thn-tetarth-08-05-2013-kai-wra-20-45-h-diarkeia-ths-ektheshs-tha-einai-apo-08-05-ews-07-06 */
echo $slug_generator->get_slug('Greek example #2: Η έκθεση ξεκινάει την Τετάρτη 08/05/2013 και ώρα 20:45. Η διάρκεια της έκθεσης θα είναι από 08/05 έως 07/06'). "\n";


