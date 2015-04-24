Note: This in no way is to deface the wordpress project. I sent these to otto and plugins@wordpress.com and received no reply. So I decided to post it here also. I would like to see these features implemented into the wordpress main line.


# Screenshot #
<a href='http://imageshack.us/photo/my-images/194/whatemailsstoredlooklik.png/' title='ImageShack - Image And Video Hosting'><img src='http://img194.imageshack.us/img194/7984/whatemailsstoredlooklik.png' border='0' /></a>
<img src='http://oi41.tinypic.com/15ml8it.jpg' />
<img src='http://oi40.tinypic.com/2i6kbd.jpg' />

Uploaded with <a href='http://imageshack.us'>ImageShack.us</a>
# Features #
  * mysql aes function - uses 255 character auto generated key during setup
  * php based encryption w/ mcrypt - creates key from password and salt (255 characters each auto generated during setup.)

---

# Flow #
  * creates key from password and salt and saves in a session variable. - make it a little less obvious what the key is than just looking at the wp-config.php
  * encrypts data with aes-256 pbfk2 key with php
  * Base64 encode data with php
  * sends to mysql server to be AES encrypted once more with a 255 character key. With the AES function.

---

dual encryption purpose. So if the mysql and http server are in seperate locations. It adds another layer of security.

# Not implemented #
> When listing the users on the front page, I'm missing the email address. need to mod get var. It's in the database etc.

# Planned #
  * Full database encryption (I started in the wrong area and had to replan my strategy)
  * randomize user meta data IDs. So first name isn't always 1,16,32 and so on. at least make them crack the key to find out what data the row holds.
  * Incorporate the ability to call gpg and use 1024 bit encryption

---

  * All data is divisible by 2 so it would be a great starting point for splitting the data into multiple pieces and encrypting over again so it's not generic to every setup.

  * Another way to one up this is to call gpg directly with exec() and use a 1024 bit keys to encrypt all the data. I think the above is a good starting point.

  * Then if the user wanted to zend or ioncube the config files to "help" protect the keys or use pgp.