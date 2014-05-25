http://acm.timus.ru/problem.aspx?space=1&num=1785&locale=en

1785. Lost in Localization

The Lavin Interactive Company, which has developed the turn-based strategy Losers-V, is constantly extending its target market by localizing the game to as many languages as it can. In particular, they are interested in creating a version of the game in Anindilyakwa, which is one of the languages spoken by indigenous Australians.
However, the localization is complicated by the fact that Anindilyakwa has no numerals. How can a phrase such as “You have seven black dragons and your enemy has forty black dragons” be translated into this language? The localizers have decided to translate it as follows: “You have few black dragons and your enemy has lots of black dragons.” They have compiled a table showing the rule of replacing numbers of monsters by Anindilyakwa words.
<table>

<tr>
<td>Number </td><td> Designation in Anindilyakwa</td>
</tr><tr>
<td>from 1 to 4 </td><td> few </td>
</tr><tr>
<td>from 5 to 9 </td><td> several </td>
</tr><tr>
<td>from 10 to 19 </td><td> pack </td>
</tr><tr>
<td>from 20 to 49 </td><td> lots</td>
</tr><tr>
<td>from 50 to 99 </td><td> horde </td>
</tr><tr>
<td>from 100 to 249 </td><td> throng </td>
</tr><tr>
<td>from 250 to 499 </td><td> swarm </td>
</tr><tr>
<td>from 500 to 999 </td><td> zounds </td>
</tr><tr>
<td>from 1000 </td><td> legion </td>
</tr>

</table>
Help the localizers automatize the process. Write a program that would output the appropriate word given the
number of monsters.
</DIV></DIV><H3 CLASS="problem_subtitle">Input</H3><DIV CLASS="problem_par"><DIV CLASS="problem_par_normal">The only line contains the number of monsters <i>n</i> (1 ≤ <i>n</i> ≤ 2000).
</DIV></DIV><H3 CLASS="problem_subtitle">Output</H3><DIV CLASS="problem_par"><DIV CLASS="problem_par_normal">Output the word corresponding to the given number of monsters in the Anindilyakwa language.</DIV></DIV><H3 CLASS="problem_subtitle">Samples</H3><TABLE CLASS="sample"><TR><TH WIDTH="350">input</TH><TH WIDTH="350">output</TH></TR><TR><TD><PRE CLASS="intable">7</PRE></TD><TD><PRE CLASS="intable">several
</PRE></TD></TR><TR><TD><PRE CLASS="intable">40
</PRE></TD><TD><PRE CLASS="intable">lots</PRE></TD></TR></TABLE>