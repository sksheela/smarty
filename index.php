<?php

/**
 * Example Application
 *
 * @package Example-application
 */

require 'libs/Smarty.class.php';

$smarty = new Smarty;

//$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$smarty->assign('title', 'Smarty');


// variable assign
// $smarty->assign("Name", "Sandeep Kumar");
// $smarty->assign("field", "Web Developer");
// $smarty->assign('Demo','uCertify');
// $logged_in = true;
// $name = 'uCertify';


// Index Array
// $smarty->assign("course", array("php", "js", "html", "css"));



// Asso Array

// $smarty->assign("contacts", array(array("phone" => "111", "fax" => "2222", "cell" => "3333"),
//                                   array("phone" => "444", "fax" => "555-", "cell" => "760")));

$smarty->assign(
    'Contacts',
    array(
        'fax' => '555-222-9876',
        'email' => 'zaphod@slartibartfast.example.com',
        'phone' => array(
            'home' => '555-444-3333',
            'cell' => '555-111-1234'
        )
    )
);


// Multi Array
// $smarty->assign("citys", array(array("A", "B", "C", "D"), array("E", "F", "G", "H"), array("I", "J", "K", "L"),
//                                array("M", "N", "O", "P")));

$smarty->assign('Contactss', array(
    '555-222-9876',
    'zaphod@slartibartfast.example.com',
    array(
        '555-444-3333',
        '555-111-1234'
    )
));


// change case
$smarty->assign('articleTitle', 'next x-men film, x3, delayed.');
// add words
$smarty->assign('articleTitles', "Psychics predict world didn't end");

// count char
$smarty->assign('articleTitle1', 'Cold Wave Linked to Temperatures.');

// count line

$smarty->assign(
    'articleTitle2',
    "War Dims Hope for Peace. Child's Death Ruins Couple's Holiday.\n\n
                 Man is Fatally Slain. Death Causes Loneliness, Feeling of Isolation."
);


// count_sentences

$smarty->assign(
    'articleTitle3',
    'Two Soviet Ships Collide - One Dies.
                 Enraged Cow Injures Farmer with Axe.'
);

// count words
$smarty->assign('articleTitle4', 'Dealers Will Hear Car Talk at Noon.');

// date

$config['date'] = '%I:%M %p';
$config['time'] = '%H:%M:%S';
$smarty->assign('config', $config);
$smarty->assign('yesterday', strtotime('-1 day'));

// default variable message

$smarty->assign('articleTitle5', 'Dealers Will Hear Car Talk at Noon.');
$smarty->assign('email', '');

// verify variable
$smarty->assign(
    'articleTitle6',
    "'Stiff Opposition Expected to Casketless Funeral Plan'"
);
$smarty->assign('EmailAddress', 'smarty@example.com');

// space left side

$smarty->assign(
    'articleTitle7',
    'NJ judge to rule on nude beach.
Sun or rain expected today, dark tonight.
Statistics show that teen pregnancy drops off significantly after 25.'
);

// lower
$smarty->assign('articleTitle8', 'Two Convicts Evade Noose, Jury Hung.');

// new line
$smarty->assign(
    'articleTitle9',
    "Sun or rain expected\ntoday, dark tonight"
);

// Add new paragaraph

$smarty->assign('articleTitle10', "Infertility unlikely to\nbe passed on, experts say.");


// replace

$smarty->assign('articleTitle11', "Child's Stool Great for Use in Garden.");

// spacify
$smarty->assign('articleTitle11', 'Something Went Wrong in Jet Crash, Experts Say.');

// string format
$smarty->assign('number', 23.5787446);

// strip
$smarty->assign('articleTitle12', "Grandmother of\neight makes\t    hole in one.");

// strip tags

$smarty->assign(
    'articleTitle13',
    "Blind Woman Gets <font face=\"helvetica\">New
Kidney</font> from Dad she Hasn't Seen in <b>years</b>."
);


// truncate 
$smarty->assign('articleTitle14', 'Two Sisters Reunite after Eighteen Years at Checkout Counter.');

// escape
$smarty->assign(
    'articleTitle15',
    "Germans use &quot;&Uuml;mlauts&quot; and pay in &euro;uro"
);

// wordwrap
$smarty->assign(
    'articleTitle16',
    "Blind woman gets new kidney from dad she hasn't seen in years."
);

//    combining modifiers
$smarty->assign('articleTitle17', 'Smokers are Productive, but Death Cuts Efficiency.');



// array

$arr = array('red', 'green', 'blue');
$smarty->assign('myColors', $arr);

$people = array('fname' => 'John', 'lname' => 'Doe', 'email' => 'j.doe@example.com');
$smarty->assign('myPeople', $people);


$smarty->assign('contacts', array(
    array('phone' => '555-555-1234',
          'fax' => '555-555-5678',
          'cell' => '555-555-0357'),
    array('phone' => '800-555-4444',
          'fax' => '800-555-3333',
          'cell' => '800-555-2222')
    ));


    $data = array(
        array('name' => 'John Smith', 'home' => '555-555-5555',
              'cell' => '666-555-5555', 'email' => 'john@myexample.com'),
        array('name' => 'Jack Jones', 'home' => '777-555-5555',
              'cell' => '888-555-5555', 'email' => 'jack@myexample.com'),
        array('name' => 'Jane Munson', 'home' => '000-555-5555',
              'cell' => '123456', 'email' => 'jane@myexample.com')
      );
$smarty->assign('contacts',$data);




// add directory where plugins are stored
$smarty->addPluginsDir('./plugins_1');

// add multiple directories where plugins are stored
$smarty->setPluginsDir(array(
    './plugins_2',
    './plugins_3',
));

// view the plugins dir chain
var_dump($smarty->getPluginsDir());

// chaining of method calls
// $smarty->setPluginsDir('./plugins')
//        ->addPluginsDir('./plugins_1')
//        ->addPluginsDir('./plugins_2');


// clear the entire cache
// $smarty->clearAllCache();

// // clears all files over one hour old
// $smarty->clearAllCache(3600);

// include('Smarty.class.php');
// $smarty = new Smarty;

// $smarty->setCaching(true);

// // set a separate cache_id for each unique URL
// $cache_id = md5($_SERVER['REQUEST_URI']);

// // capture the output
// $output = $smarty->fetch('index.tpl', $cache_id);

// // do something with $output here
// echo $output;


// get loaded config template var #foo#
$myVar = $smarty->getConfigVars('foo');

// get all loaded config template vars
$all_config_vars = $smarty->getConfigVars();

// take a look at them
print_r($all_config_vars);

// set some plugins directories
$smarty->setPluginsDir(array(
    './plugins',
    './plugins_2',
));

// get all directories where plugins are stored
$config_dir = $smarty->getPluginsDir();
var_dump($config_dir); // array


function smarty_block_foo($params, $smarty)
{
  if (isset($params['object'])) {
    // get reference to registered object
    $obj_ref = $smarty->getRegisteredObject($params['object']);
    // use $obj_ref is now a reference to the object
  }
}


// set some template directories
// $smarty->setTemplateDir(array(
//     'one' => './templates',
//     'two' => './templates_2',
//     'three' => './templates_3',
// ));

// // get all directories where templates are stored
// $template_dir = $smarty->getTemplateDir();
// var_dump($template_dir); // array

// // get directory identified by key
// $template_dir = $smarty->getTemplateDir('one');
// var_dump($template_dir); // string


// get assigned template var 'foo'
$myVar = $smarty->getTemplateVars('foo');

// get all assigned template vars
$all_tpl_vars = $smarty->getTemplateVars();

// take a look at them
print_r($all_tpl_vars);


// set a single directory where the config files are stored
$smarty->setConfigDir('./config');

// view the config dir chain
var_dump($smarty->getConfigDir());

// set multiple directoríes where config files are stored
$smarty->setConfigDir(array(
    'one' => './config',
    'two' => './config_2',
    'three' => './config_3',
));

// view the config dir chain
var_dump($smarty->getConfigDir());

// chaining of method calls
$smarty->setTemplateDir('./templates')
       ->setConfigDir('./config')
       ->setCompileDir('./templates_c')
       ->setCacheDir('./cache');

       echo "<br/>";
       echo "<br/>";

       









// $smarty->assign("option_values", array("NY", "NE", "KS", "IA", "OK", "TX"));
// $smarty->assign("option_output", array("New York", "Nebraska", "Kansas", "Iowa", "Oklahoma", "Texas"));
// $smarty->assign("option_selected", "NE");

$smarty->display('index.tpl');
