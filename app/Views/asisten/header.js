class Header extends HTMLElement {
    constructor() {
        super();
    }

    connectedCallback() {
        this.innerHTML = `
        <Header>
            <div class="mt-4 p-5 bg-primary text-white rounded">
		<h1>Pendaftaran Asisten Praktikum</h1>
		<p>Asisten Praktikum mempunyai peran yang sangat penting dalam kegiatan Praktikum di kelas.
			Keberadaannya sangat dibutuhkan oleh dosen pengampu untuk membantu dosen dalam mendampingi
			peserta praktikum dalam melaksanakan percobaan-percobaan yang telah disiapkan oleh dosen
			pengampu. Mahasiswa-mahasiswa sangat didorong untuk dapat menjadi seorang asisten praktikum.
			Selain memberikan pengalaman bekerja bersama dosen, menjadi Asisten Praktikum dapat mengasah
			kepedulian terhadap orang lain yang membutuhan. Jika anda terpanggil untuk menjadi Asisten
			Praktikum, silahkan daftarkan diri anda pada form di bawah ini...</p>
	    </div>
        </Header>`;
    }
}


customElements.define("header-component", Header);