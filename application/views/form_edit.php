<!DOCTYPE Html>
<Html>
<Head>
    <Title>Halaman Edit</Title>
</Head>
<Body>
    <H3>Halaman Edit Mahasiswa</H3>
    <Form action = "<?php echo base_url ('index.php/loginakses/AksiEdit') ?>" Method="Post">
    <Table>
        <Tr>
            <Td>NIM</Td>
            <Td>:</Td>
            <Td><Input  Type="Text" Name="nim" value = "<?php echo $data_mhs->nim ?>"></Td>
        </Tr>
        <Tr>
            <Td>Nama</Td>
            <Td>:</Td>
            <Td><Input  Type="Text" Name="nama"  value = "<?php echo $data_mhs->nama ?>" ></Td>
        </Tr>
        <Tr>
            <Td>Jurusan</Td>
            <Td>:</Td>
            <Td><Input  Type="Text" Name="jurusan"  value = "<?php echo $data_mhs->jurusan ?>"></Td>
        </Tr>
        <Tr>
            <Td Colspan="3"><Button Type="Submit">Edit Mahasiswa</Button></Td>
        </Tr>
    </Table>
    </Form>
</Body>
</Html>