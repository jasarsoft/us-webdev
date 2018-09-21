<html>
<head>
    <title> Singidunum Univerzitet </title>
</head>
<body>
    <?php
        echo '<h1> KOMANDE ZA STAMPANJE TEKSTA </h1><br/>';
        // nacini za stampanje teksta na ekranu

        echo 'Hello <br/>';
        echo 'Hello', '&nbsp;Pozdrav <br/>';
        echo ('Hello<br/>');
        print 'Hello<br/>';
        print ('Hello<br/>');
        
        // stampanje koriscenjem heredoc sintakse (kao u Perl-u)
        echo <<<BEGIN
prvi deo teksta
drugi deo teksta
treci deo
BEGIN;
?>
</body>
</html>