<!DOCTYPE Html>
<Html>
<Head>
    <Title>Halaman Tambah</Title>
</Head>
<Body>
    <H3>Halaman Tambah Mahasiswa</H3>
    <Form action="<?php echo base_url ('index.php/loginakses/AksiInsert') ?>" Method="Post">
    <Table>
       
        <Tr>
            <Td>NIM</Td>
            <Td>:</Td>
            <Td><Input Type="Text" Name="nim" REQUIRED></Td>
        </Tr>
        <Tr>
            <Td>Nama</Td>
            <Td>:</Td>
            <Td><Input Type="Text" Name="nama" REQUIRED></Td>
        </Tr>
        <Tr>
            <Td>Jurusan</Td>
            <Td>:</Td>
            <Td><Input Type="Text" Name="jurusan" REQUIRED></Td>
        </Tr>
        <Tr>
            <Td Colspan="3"><Button Type="Submit">Tambah Mahasiswa</Button></Td>
        </Tr>
    </Table>
    </Form>
</Body>
</Html>