# language-tag-extensions-registry
List all IANA/Unicode valid language-codes, and summarizes its contents at http://cldr.unicode.org

##Introduction and motivations

The OKFN's [Data Packaged Core Datasets](https://github.com/datasets) offers 
[country-codes](https://github.com/datasets/country-codes/) and [language-codes](https://github.com/datasets/language-codes/), and merging them you can generate [IETF language tag](https://en.wikipedia.org/wiki/IETF_language_tag), but not all combination of codes are valid, so, there are a lack in * Core Datasets project* of a **list of all valid IETF language tags**.

The URL of *IETF language tags*,  [www.iana.org/assignments/language-tag-extensions-registry](http://www.iana.org/assignments/language-tag-extensions-registry/language-tag-extensions-registry) is the official resource. Since 2010-09-02 IANA is delegating to Unicode Consortium the authority over its language codes. The zip file cited at http://www.unicode.org/Public/cldr/latest/core.zip have all updated codes and all metadata for [Language localisation](https://en.wikipedia.org/wiki/Language_localisation), suppliing all "locale" information   for each language by a precise [UNICODE LOCALE DATA MARKUP LANGUAGE - LDML](http://www.unicode.org/reports/tr35/) (Unicode Technical Standard #35).

In the `/main` folder of the `core.zip` file, cada filename of "filename.xml" is a valid code in the form "lang_country".

## External links
* http://cldr.unicode.org/
* https://en.wikipedia.org/wiki/Common_Locale_Data_Repository
* http://cldr.unicode.org/index/cldr-spec
* http://www.unicode.org/reports/tr35/#Locale_Inheritance
* http://cldr.unicode.org/index/cldr-spec/json
  * http://i18ndata.appspot.com/cldr/main?action=browse&depth=1 
  * ex. http://i18ndata.appspot.com/cldr/tags/unconfirmed/main/pt_PT/identity?action=browse&depth=-1

