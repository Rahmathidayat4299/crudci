<!DOCTYPE Html>
<Html>
<Head>
    <Meta Charset="Utf-8">
    <Meta Http-Equiv="X-UA-Compatible" Content="IE=Edge">
    <Title>Halaman Home</Title>
    <Link Rel="Stylesheet" Href="">
</Head>
<Body>
    <H1>Data Mahasiswa Kecoak Sakti</H1>
    <A Href="">Tambah Mahasiswa</A>
    <Br>
    <Br>
    <Table Border="1">
        <Tr>
            <Td>No</Td>
            <Td>NIM</Td>
            <Td>Nama</Td>
            <Td>Jurusan</Td>
            <Td>Aksi</Td>
        </Tr>
        <?php
        $count = 0;
        foreach($data_mhs as $row){
            $count = $count+1;

        ?>
        
        <Tr>
            <Td><?php echo $count?></Td>
            <Td><?php echo $row -> nim?></Td>
            <Td><?php echo $row -> nama?></Td>
            <Td><?php echo $row -> jurusan?></Td>
            <Td>sss</Td>
            <Td><a href="delete">delete</a>    <a href="edit">edit</a></Td>
        </Tr>
       <?php } ?>
    </Table>
</Body>
</Html>