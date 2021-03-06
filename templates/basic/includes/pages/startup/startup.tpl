{*
 * WiND - Wireless Nodes Database
 * Basic HTML Template
 *
 * Copyright (C) 2005 Konstantinos Papadimitriou <vinilios@cube.gr>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; version 2 dated June, 1991.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 *
 *}
{include file=generic/page-title.tpl title="`$lang.welcome`"}
{if $startup_html != ''}
{$startup_html}
{else}

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th scope="col">

<p align="left">
<font size="5"><strong>WiND - Wireless Nodes Database (http://wind.wna.gr)</strong></font>
<br />
<br />
<font size="2" face="Verdana, Arial, Helvetica, sans-serif">Καλωσήλθατε στη βάση δεδομένων κόμβων του WNA.<br>
Εδώ μπορείτε να βρείτε όλους τους κόμβους πρόσβασης των ασυρμάτων δικτύων αλλά και τους κόμβους των πελατών που συνδέονται στο δίκτυο.<br>
Για να δημιουργήσετε τον δικό σας κόμβο (είτε είναι κόμβος με<a href="http://www.wna.gr/wiki/AP_node"> Σημείο Πρόσβασης</a> είτε <a href="http://www.wna.gr/wiki/Client_node">κόμβος Πελάτη</a>)
αρκεί να συνδεθείτε <u>με τον ίδιο λογαριασμό που έχετε και στο <a href="http://www.wna.gr/forum/">φόρουμ του WNA.gr</a></u></font></p>
<center align="left">
  <p align="left"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Αν δεν έχετε εγγραφεί ήδη μπορείτε <a href="../forum/member.php?action=register">να κάνετε εγγραφή από εδώ.</a> <br />
      <br />
      <strong>Εάν είναι η πρώτη φορά που χρησιμοποιείτε το εργαλείο αυτό <a href="../wiki/WiND"><u>διαβάστε προσεκτικά τις οδηγίες. </u></a></strong>
  </font>
  <p align="left"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Το WNA παρέχει σε όλους όσους έχουν κόμβο τη δυνατότητα <u>δωρεάν domain name της μορφής όνομακόμβου.wna.gr </u></strong><br>
    Περισσότερες πληροφορίες για το <a href="http://www.wna.gr/wiki/mypage">πως θα αποκτήσετε κι εσείς την σελίδα σας μπορείτε να βρείτε εδώ. </a></font><font size="2"></font>
  <hr size="1" noshade>
    <div align="left"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Για οποιοδήποτε θέμα που αφορά το WiND μπορείτε να συζητάτε <a href="../forum/thread-48.html"><u>στο σχετικό θέμα του φόρουμ</u></a> </font></div>
</center>
</center>
<center>
  <p align="left"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Η ομάδα διαχείρισης του WiND: pc-killer, wavesoft, panisxiros, gio, geo_stef<br>
    Email ομάδας: wind_team (ατ) wna.gr
  </font></p>
  <p align="left"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Αν βρείτε τον κόμβο σας στον χάρτη αλλά ως διαχειριστής φαίνεται η ομάδα wind_team, αυτό έγινε γιατί δεν είχατε κάνει σύνδεση στο wind όταν δημιουργήθηκε ο κόμβος. Για να σας μεταβιβάσουμε τα δικαιώματα διαχείρισης επικοινωνήστε μαζί μας. </font></p>


</th>
    <th scope="col">
<script type='text/javascript'><!--//<![CDATA[
   var m3_u = (location.protocol=='https:'?'https://adserver.vivanet.gr/www/delivery/ajs.php':'http://adserver.vivanet.gr/www/delivery/ajs.php');
   var m3_r = Math.floor(Math.random()*99999999999);
   if (!document.MAX_used) document.MAX_used = ',';
   document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
   document.write ("?zoneid=149");
   document.write ('&amp;cb=' + m3_r);
   if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
   document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
   document.write ("&amp;loc=" + escape(window.location));
   if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
   if (document.context) document.write ("&context=" + escape(document.context));
   if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
   document.write ("'><\/scr"+"ipt>");
//]]>--></script><noscript><a href='http://adserver.vivanet.gr/www/delivery/ck.php?n=afb829d2&amp;cb=00000000000' target='_blank'><img src='http://adserver.vivanet.gr/www/delivery/avw.php?zoneid=149&amp;cb=0000000000&amp;n=afb829d2' border='0' alt='' /></a></noscript>
</th>
  </tr>
</table>









{/if}