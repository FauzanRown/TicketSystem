def input_data():
    data = []
    n = int(input("Berapa banyak penumpang? "))
    for i in range(n):
        print(f"\nData penumpang ke-{i+1}")
        kode = input("Kode Tiket     : ")
        nama = input("Nama Penumpang : ")
        kursi = input("Nomor Kursi    : ")
        tujuan = input("Tujuan         : ")
        harga = int(input("Harga Tiket    : "))
        data.append([kode, nama, kursi, tujuan, harga])
    return data

def tampilkan_data(data):
    print(f"\n{'Kode':<10}{'Nama':<15}{'Kursi':<10}{'Tujuan':<15}{'Harga':<10}")
    for d in data:
        print(f"{d[0]:<10}{d[1]:<15}{d[2]:<10}{d[3]:<15}{d[4]:<10}")

def sorting(data, mode='asc'):
    for i in range(len(data) - 1):
        for j in range(len(data) - 1 - i):
            if (mode == 'asc' and data[j][4] > data[j+1][4]) or \
               (mode == 'desc' and data[j][4] < data[j+1][4]):
                data[j], data[j+1] = data[j+1], data[j]

def searching(data, nama):
    found = False
    for d in data:
        if d[1].lower() == nama.lower():
            print("\nData Ditemukan:")
            print(f"Kode Tiket     : {d[0]}")
            print(f"Nama Penumpang : {d[1]}")
            print(f"Nomor Kursi    : {d[2]}")
            print(f"Tujuan         : {d[3]}")
            print(f"Harga Tiket    : {d[4]}")
            found = True
            break
    if not found:
        print("\nPenumpang tidak ditemukan.")

# Main
data_penumpang = input_data()
print("\n=== DATA SEBELUM SORTING ===")
tampilkan_data(data_penumpang)

# Sorting
print("\nUrutkan data berdasarkan harga:")
print("1. Ascending (termurah)")
print("2. Descending (termahal)")
pilih = input("Pilih opsi (1/2): ")

if pilih == '1':
    sorting(data_penumpang, 'asc')
    print("\n=== DATA SETELAH SORTING ASCENDING ===")
    tampilkan_data(data_penumpang)
elif pilih == '2':
    sorting(data_penumpang, 'desc')
    print("\n=== DATA SETELAH SORTING DESCENDING ===")
    tampilkan_data(data_penumpang)
else:
    print("Pilihan tidak valid. Menampilkan data asli.")

# Searching
cari = input("\nMasukkan nama penumpang yang ingin dicari: ")
searching(data_penumpang, cari)
