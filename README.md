# MiniChat Project II - The Return

The project is a **Chat Web App**, groups will be set _randomly_.
What you need, is what you already learn : `HTML`, `CSS`, `PHP`, `MySQL` et `JS` !

You will use the framework [Material Design Light](https://getmdl.io/).
A squeleton file `index-squeleton.php` is avaible in the root of this repository, you have to follow functional specifications.

This project is loosely based on [OpenClassrooms - TP : un mini-chat](https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql/tp-un-mini-chat).

## Functional Specifications (already write)

* [French version](https://docs.google.com/document/d/1AK9OQgLsr0Iv549YS3zUCoENvSVdm0H5RV2kMYpaeyc)
* [English version](https://docs.google.com/document/d/15xab7ijmKXCmGWooJcPr9Yp8X6TVPQ3CnYtqoKc297Q)

## Structure of the MySQL table

* `ID` (`INT`): it will let us know in what order were mailed messages. It will set the `auto_increment` for the numbers to write themselves, and do not forget to select "Primary" (this tells MySQL that this is the field that numbers the records);

* `pseudo` (`VARCHAR`): remember to specify the maximum size of the field (get to the maximum, "255");

* `message` (`VARCHAR`): Similarly, we will show a maximum size of 255 characters. If you think that your messages will be longer, use rather the type `TEXT`, much less limited.

## Features

It's a chat, of course you must let people talk together on a global channel, __without password login__, allowing users to choose a nickname, messages are plain text.

## Bonus

* Remember the nickname. We must now re-enter their username for each new message. As you probably know, it is possible in HTML pre-fill a field with the value attribute. For example:

```php
<input type="text" name="username" value="Alice" />
```

* Replace `Alice` by the pseudonym of the visitor. This pseudonym can be from a cookie for example when post a message, you enter their username in a cookie, which then allows you to pre-fill the field.

* Submit to update the mini-chat. The mini-cat does not automatically update if new messages. This is normal, it would be hard to do at our level. Basically, the web was not really intended for this type of application. However, you can easily do is provide a link "Refresh" to load the page again. Thus, if there are new messages, they will appear after clicking on the link.

* Refresh automatically every 5 seconds the page using __JavaScript__.

* View old messages. It is now clear that the last 10 messages. Can you find a way to display the old messages? Of course, view them all at once on the same page is not a good idea. You could imagine a setting `$_GET['page']` which to choose the messages page number to display.

* Allow other channels such as private discussions.

* Allow users to define an avatar (you can use [Gravatar](https://fr.gravatar.com/)).
