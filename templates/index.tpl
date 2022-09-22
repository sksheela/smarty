{$Contacts.fax}<br />
{$Contacts.email}<br />
{* you can print arrays of arrays as well *}
{$Contacts.phone.home}<br />
{$Contacts.phone.cell}<br /><br/>

{$Contactss[0]}<br />
{$Contactss[1]|upper}<br />
{* you can print arrays of arrays as well *}
{$Contactss[2][0]}<br />
{$Contactss[2][1]}<br /><br/>

{* change case upper|lower|capitalize *}

{$articleTitle}<br /><br/>
{$articleTitle|capitalize}<br /><br/>
{$articleTitle|capitalize:true}<br /><br/>

{* add words *}
{$articleTitles|cat:' yesterday.'}<br/><br/>

{* count char *}
 
{$articleTitle1}<br/><br/>
{$articleTitle1|count_characters}<br/><br/>
{$articleTitle1|count_characters:true}<br/><br/>

{* count line *}

{$articleTitle2}<br/>
{$articleTitle2|count_paragraphs}<br/><br/>

{*  count_sentences *}
{$articleTitle3}<br/>
{$articleTitle3|count_sentences}<br/><br/>

{* count words *}
{$articleTitle4}<br/>
{$articleTitle4|count_words}<br/><br/>

{* Date *}


{$smarty.now|date_format}<br/>
{$smarty.now|date_format:"%D"}<br/>
{$smarty.now|date_format:$config.date}<br/>
{$yesterday|date_format}<br/>
{$yesterday|date_format:"%A, %B %e, %Y"}<br/>
{$yesterday|date_format:$config.time}<br/><br/>

{* default message *}
{$articleTitle5|default:'no title'}<br/>
{$myTitle|default:'no title'}<br/>
{$email|default:'No email address available'}<br/><br/>

{* verify variable * }

{$articleTitle6}<br/>
{* 'Stiff Opposition Expected to Casketless Funeral Plan' *}

{$articleTitle6|escape}<br/>
{* &#039;Stiff Opposition Expected to Casketless Funeral Plan&#039; *}

{$articleTitle6|escape:'html'}    {* escapes  & " ' < > *}<br/>
{* &#039;Stiff Opposition Expected to Casketless Funeral Plan&#039; *}

{$articleTitle6|escape:'htmlall'} {* escapes ALL html entities *}<br/>
{* &#039;Stiff Opposition Expected to Casketless Funeral Plan&#039; *}

<a href="?title={$articleTitle6|escape:'url'}">click here</a><br/>
{* <a href="?title=%27Stiff%20Opposition%20Expected%20to%20Casketless%20Funeral%20Plan%27">click here</a> *}

{$articleTitle6|escape:'quotes'}<br/>
{* \'Stiff Opposition Expected to Casketless Funeral Plan\' *}

<a href="mailto:{$EmailAddress|escape:"hex"}">{$EmailAddress|escape:"hexentity"}</a><br/>
{$EmailAddress|escape:'mail'}    {* this converts to email to text *}<br/><br/>
{* <a href="mailto:%62%6f%..snip..%65%74">&#x62;&#x6f;&#x62..snip..&#x65;&#x74;</a> *}

{* space left side *}

{$articleTitle7}<br/>

{$articleTitle7|indent}<br/>

{$articleTitle7|indent:10}<br/>

{$articleTitle7|indent:1:"\t"}<br/><br/>

{* lower *}

{$articleTitle8}<br/>
{$articleTitle8|lower}<br/><br/>

{* new line *}
{$articleTitle9|nl2br}<br/><br/>

{* replace each carriage return, tab and new line with a space *}

{$articleTitle10}
{$articleTitle10|regex_replace:"/[\r\t\n]/":" "}
<br/><br/>

{* replace *}

{$articleTitle11}<br/>
{$articleTitle11|replace:'Garden':'Vineyard'}<br/>
{$articleTitle11|replace:' ':'    '}<br/<br/>


{* spacify *}

{$articleTitle11}<br/>
{$articleTitle11|spacify}<br/>
{$articleTitle11|spacify:"^^"}<br/><br/>

{* string format *}
{$number}<br/>
{$number|string_format:"%.2f"}<br/>
{$number|string_format:"%d"}<br/><br/>

{* strip *}

{$articleTitle12}<br/>
{$articleTitle12|strip}<br/>
{$articleTitle12|strip:'&nbsp;'}<br/><br/>

{* strip tags *}


{$articleTitle13}<br/>
{$articleTitle13|strip_tags}<br/> {* same as {$articleTitle13|strip_tags:true} *}
{$articleTitle13|strip_tags:false}<br/><br/>

{* truncate *}

{$articleTitle14}<br/>
{$articleTitle14|truncate}<br/>
{$articleTitle14|truncate:30}<br/>
{$articleTitle14|truncate:30:""}<br/>
{$articleTitle14|truncate:30:"---"}<br/>
{$articleTitle14|truncate:30:"":true}<br/>
{$articleTitle14|truncate:30:"...":true}<br/>
{$articleTitle14|truncate:30:'..':true:true}<br/><br/>

{* escape *}

{$articleTitle15}<br/>
{$articleTitle15|unescape:"html"}<br/>
{$articleTitle15|unescape:"htmlall"}<br/><br/>

{* wordwrap *}

{$articleTitle16}<br/>
{$articleTitle16|wordwrap:30}<br/>
{$articleTitle16|wordwrap:20}<br/>
{$articleTitle16|wordwrap:30:"<br />\n"}<br/>
{$articleTitle16|wordwrap:26:"\n":true}<br/><br/>


{*  combining modifiers *}
{$articleTitle17}<br/>
{$articleTitle17|upper|spacify}<br/>
{$articleTitle17|lower|spacify|truncate}<br/>
{$articleTitle17|lower|truncate:30|spacify}<br/>
{$articleTitle17|lower|spacify|truncate:30:". . ."}<br/><br/>

{* define the function *}
{function name=menu level=0}
  <ul class="level{$level}">
  {foreach $data as $entry}
    {if is_array($entry)}
      <li>{$entry@key}</li>
      {call name=menu data=$entry level=$level+1}
    {else}
      <li>{$entry}</li>
    {/if}
  {/foreach}
  </ul>
{/function}

{* create an array to demonstrate *}
{$menu = ['item1','item2','item3' => ['item3-1','item3-2','item3-3' =>
['item3-3-1','item3-3-2']],'item4']}

{* array *}
<ul>
{foreach $myColors as $color}
    <li>{$color}</li>
{/foreach}
</ul>



<ul>
{foreach $myPeople as $value}
   <li>{$value@key}: {$value}</li>
{/foreach}
</ul>


{* key always available as a property *}
{foreach $contacts as $contact}
  {foreach $contact as $value}
    {$value@key}: {$value}
  {/foreach}
{/foreach}

{* accessing key the PHP syntax alternate *}
{foreach $contacts as $contact}
  {foreach $contact as $key => $value}
    {$key}: {$value}
  {/foreach}
{/foreach}



{section name=customer loop=$contacts}
<p>
  name: {$contacts[customer].name}<br />
  home: {$contacts[customer].home}<br />
  cell: {$contacts[customer].cell}<br />
  e-mail: {$contacts[customer].email}
</p>
{/section}

{* function  *}
 
 {* initialize the count *}
{counter start=0 skip=2}<br />
{counter}<br />
{counter}<br />
{counter}<br />






