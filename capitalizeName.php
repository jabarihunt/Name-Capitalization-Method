<?php

    /**
     * Capitalize Name Method
     * @author Jabari J. Hunt
     *
     * Originally created by Armand Niculescu (https://www.media-division.com/correct-name-capitalization-in-php/).
     * I reformatted it and added validation to the passed variable.
     *
     * @param string $name
     * @throws Exception Improper input: String expected.
     * @return string
     */

        private function capitalizeName(string $name): string {

            // VALIDATE PASSED STRING

                if (!empty($name)) {

                    // SET INITIAL VARIABLES

                        $name                = str_replace('’', "'", strtolower($name));
                        $wordSplitters       = [' ', '-', "O'", "L'", "D'", 'St.', 'Mc'];
                        $lowercaseExceptions = ['the', 'van', 'den', 'von', 'und', 'der', 'de', 'da', 'of', 'and', "l'", "d'"];
                        $uppercaseExceptions = ['III', 'IV', 'VI', 'VII', 'VIII', 'IX'];

                    // LOOP THROUGH WORD SPLITTERS

                        foreach ($wordSplitters as $delimiter) {

                            // SET INITIAL LOOP VARIABLES

                                $words    = explode($delimiter, $name);
                                $newWords = [];

                            // LOOP THROUGH WORDS AND DECIDE CASE | DECIDE CASE OF WORD SPLITTER / DELIMITER

                                foreach ($words as $word) {

                                    if (in_array(strtoupper($word), $uppercaseExceptions)) {
                                        $word = strtoupper($word);
                                    } else if (!in_array($word, $lowercaseExceptions)) {
                                        $word = ucfirst($word);
                                    }

                                    $newWords[] = $word;

                                }

                                if (in_array(strtolower($delimiter), $lowercaseExceptions)) {
                                    $delimiter = strtolower($delimiter);
                                }

                            //  REBUILD NAME

                                $name = implode($delimiter, $newWords);

                        }
                }
                else {
                    throw new Exception('Improper input: String expected.');
                }

            // RETURN STRING

                return $name;

        }

?>