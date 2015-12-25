# wp-lang-specific
WP Lang Specific enables you to show specific blocks of content following the language of the browser used by the visitor using simple shortcodes.

**Version:** 1.1.0 

## How to use

The form of the shortcodes is relatively simple and it needs only one argument : language

### Here is a simple example :

*Display a content content in english*

  ```
  [lang language="en" fallback="merci de regarder ci-dessous"]
    This content should only display in an english browser.
  [/lang]
 ```
  
*Display a content block in french*

  ```
  [lang language="fr" fallback="please see above"]
    Ce contenu devrai s'afficher uniquement pour les navigateurs en français.
  [/lang]
   ```

*PS: you don't need to use a fallback string, just keep in mind it's there in case you need it :)*
