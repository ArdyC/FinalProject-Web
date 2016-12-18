create table if not exists `tbarang` (
  `id_barang` char(10) not null,
  `nama_barang` char(20) not null,
  `satuan` int(10) default null,
  `harga` int(20) default null,
  primary key (`id_barang`) 
) engine = InnoDB DEFAULT CHARSET=latin1;
