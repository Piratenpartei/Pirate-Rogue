<?php
/**
 * The template for displaying 404 error with fun videos
 */
?>

<?php
$videolist = array(
    1 => array(
        'title' => '<span lang="de">Was ist denn bitte die Piratenpartei?</span>',
        'link' => 'https://www.youtube-nocookie.com/embed/Zzs_9suYC28?list=RDZzs_9suYC28',
        'desc' => '<p lang="de"><br>Mix: Wofür steht dieser Haufen, der sich Piratenpartei nennt?</p>',
    ),
    2 => array(
        'title' => '<span lang="de">Alle, die mit uns den Bundestag entern</span>',
        'link' => 'https://www.youtube-nocookie.com/embed/Zzs_9suYC28',
        'desc' => '',
    ),
    3 => array(
        'title' => '<span lang="en">What shall we do with a drunken sailor?</span>',
        'link' => 'https://www.youtube-nocookie.com/embed/qGyPuey-1Jw',
        'desc' => '<div lang="en"><p><br>
            What shall we do with a drunken sailor,<br>
            What shall we do with a drunken sailor,<br>
            What shall we do with a drunken sailor,<br>
            Early in the morning?<br></p>
            <p><em>Refrain:</em>
            <em>
                Way hay and up she rises,<br>
                Way hay and up she rises,<br>
                Way hay and up she rises,<br>
                Early in the morning
            </em></p><p>
            <em>Put him in the long boat till he\'s sober,</em><br>
            <em>Put him in the scuppers with a hose-pipe on him.</em><br>
            <em>Shave his belly with a rusty razor.</em><br>
            <em>Put him in bed with the captain\'s daughter.</em><br>
            <em>Take him and shake him and try to awake him.</em><br>
            <em>Have you seen the captain\'s daughter?</em><br>
            <em>Put him in the bilge and make him drink it</em><br>
            <em>Truss him up with a runnin\' bowline.</em><br>
            <em>Give \'im a dose of salty water.</em><br>
            <em>Stick on \'is back a mustard plaster.</em><br>
            <em>Send him up the crow\'s nest till he falls down,</em><br>
            <em>Tie him to the taffrail when she\'s yardarm under,</em><br>
            <em>Soak \'im in oil \'til he sprouts a flipper.</em><br>
            <em>Put him in the guard room \'til he\'s sober.</em><br>
            <em>That\'s what we\'ll do with the drunken sailor.</em><br>
            <em>Keel haul \'im \'til he\'s sober.</em><br>
            <em>Put him in a hole with an angry weasel.</em><br>
            <em>Scratch his back with a cat o\' nine tails.</em><br>
            </p></div>',
    ),
    4 => array(
        'title' => '<span lang="en">The drunken Scotsman</span>',
        'link' => 'https://www.youtube-nocookie.com/embed/MZ35SOU9HTM',
        'desc' => '',
    ),
    5 => array(
        'title' => '<span lang="en">About pirates...</span>',
        'link' => 'https://www.youtube-nocookie.com/embed/ZnJ7uOK4nYg',
        'desc' => '',
    ),
);

$useentry = $videolist[array_rand($videolist, 1)];

?>
<p>
    <?php esc_html_e( 'We are sorry, that we could not serve what you are looking for. But how about this:', 'pirate-rogue'); ?>
</p>
<h3><?php echo $useentry['title']; ?></h3>
    
<iframe width="560" height="315" src="<?php echo $useentry['link']; ?>" frameborder="0" allowfullscreen></iframe>

<?php if (!empty($useentry['desc']))  {
    echo $useentry['desc'];
}



