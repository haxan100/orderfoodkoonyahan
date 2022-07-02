#Kasir : 

- responsive tampilan
- header 

Aktor : {
	- Owner = {
        - Ngperint TRX PNJUALAN -{
            Perhari
            Perminggu
            Perbulan
            Penjualan bersih (Modal)
            Transaksi Stock
        }
        -Management User {
            - Admin            
            - Kasir
        }
        - Report Penjualan {
            offline 
            Online
        }
    }
	- Admin = {
        - Menu Stok ={
            - Bahan 
            - Menu - {
                Harga , Modal, QTY,  
            }
        } 
        - Menu Meja ={
            
        } 
        - Report Makanan terjual = {
        }
    }
	- kasir = {
                -order Pesanan , 
                -order 
                -Transaksi Dari Customer
                - pilihan orderan = {
                    - online  {
                        -gofood ={
                            - isi { nama pelanggan , nama menu"nya , jumlah , harga , ppn , total, logo ,nama driver}
                            }
                        -grabfood ={
                            - isi { nama pelanggan , nama menu"nya , jumlah , harga , ppn , total, logo ,nama driver}
                            }
                        -shopee food={
                            - isi { nama pelanggan , nama menu"nya , jumlah , harga , ppn , total, logo ,nama driver}
                            }
                        -Wa={
                            - isi { nama pelanggan , nama menu"nya , jumlah , harga , ppn , total, logo ,nama driver}
                            }
                        -dll ={
                            - isi { nama pelanggan , nama menu"nya , jumlah , harga , ppn , total, logo ,nama driver}
                            }
                    }
                    - Offline {
                        -take away ={
                            - isi { nama pelanggan , nama menu"nya , jumlah , harga , ppn , total }
                            }
                        -Dine in = {
                            - isi { nama pelanggan , nama menu"nya , jumlah , harga , ppn , total, NO MEJA }
                            }
                        }
                    }

}      
	- Customer = {
        -Dine in {
            - Pesan makanan dine in 
            - meja nomor brapa , pesanan makanan brapa aja dll 
             
        }
    } 
}

Bugs : 
      belum bisa fungsi cancle


Tambahan : - Start System Group