<html>
<style>
    table {
        border-collapse: collapse;
    }

    td,
    th {
        border: 1px solid black;
    }
</style>

<body>
    <h1>Korpa</h1>
    <?php if(count($korpa) > 0):?>
    <table>
        <thead>
            <tr>
                <th>Naziv</th>
                <th>Cena</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td>Ukupno:</td>
                <td><?php echo $ukupno;?></td>
            </tr>
        </tfoot>
        <tbody>
        <?php foreach($korpa as $prK): ?>
            <tr>
                <td><?php echo $prK['naziv'];?></td>
                <td><?php echo $prK['cena'];?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
    <?php else: ?>
    <p>Nema proizvoda u korpi</p>
    <?php endif;?>
    <form method="post" action="?">
        <p>
            <a href="?">Nastavi sa kupovinom</a>
            <!-- implementirati isprazni korpu za bonus poene -->
            <input type="submit" name="submit" value="Isprazni">
        </p>
    </form>
</body>

</html>