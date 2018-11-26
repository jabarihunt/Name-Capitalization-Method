# Name Capitalization Method
Method that correctly capitalizes names.  Accounts for prefixes &amp; suffixes, apostrophes, name parts that shouldn't be capitalized, and other scenarios where using something like `UCWORDS(STRTOLOWER($STR))` doesn't work.

Eventually I'll move this into a formatter class of some sort.

Credit for the original method goes to [Armand Niculescu](https://www.media-division.com/correct-name-capitalization-in-php/).
