<!doctype html>
<html>
    <head>
        <title>Registracija za ponuda za posao</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Formular za registraciju za ponudu</h1>
        <form action="save.php" method='post'>
            <table>
                <tr>
                    <th><label for='forename'>Ime:</label></th>
                    <td>
                        <input type='text' id='forename' name='forename' required>
                    </td>
                </tr>
                <tr>
                    <th><label for='surname'>Prezime:</label></th>
                    <td>
                        <input type='text' id='surname' name='surname' required>
                    </td>
                </tr>
                <tr>
                    <th>Datum rodjenja:</th>
                    <td>
                        <input type='date' name='birthday'>
                    </td>
                </tr>
                <tr>
                    <th>Nivo strucne spreme:</th>
                    <td>
                        <select name='education_level'>
                            <option value='I'>Osnovna skola 4 godina</option>
                            <option value='II'>Osnovna skola 8 godina</option>
                            <option value='III'>trogodisnja zanatska skola</option>
                            <option value='IV'>cetverogodisnja strucna zanatska skola</option>
                            <option value='V'>cetverogodisnja zanatska skola</option>
                            <option value='VI-1'>visa skola</option>
                            <option value='VII-1'>fakultet</option>
                            <option value='VII-2'>master</option>
                            <option value='VIII'>doktorat</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Trazena pozicija:</th>
                    <td>
                        <input type='text' name='position' required>
                    </td>
                </tr>
                <tr>
                    <th>Broj telefona:</th>
                    <td>
                        <input type='text' name='phone'>
                    </td>
                </tr>
                <tr>
                    <th>Adresa e-poste:</th>
                    <td>
                        <input type='email' name='email' required>
                    </td>
                </tr>
                <tr>
                    <th>Postanska adresa:</th>
                    <td>
                        <textarea name='postal_address' rows='4'></textarea>
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <button type='submit'>
                            Kliknite da posaljete podatke
                        </button>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>