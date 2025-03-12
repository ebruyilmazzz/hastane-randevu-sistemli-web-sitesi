<form action="{{ route('randevu.kaydet') }}" method="POST">
    @csrf
    <label>Ad Soyad:</label>
    <input type="text" name="adsoyad" required>

    <label>Telefon No:</label>
    <input type="text" name="telno" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Randevu Tarihi:</label>
    <input type="date" name="randevutarih" required>

    <label>Bölüm:</label>
    <select name="bolum" required>
        <option value="Dahiliye">Dahiliye</option>
        <option value="Kardiyoloji">Kardiyoloji</option>
        <option value="Göz">Göz Hastalıkları</option>
    </select>

    <label>Ek Mesaj:</label>
    <textarea name="mesaj"></textarea>

    <button type="submit">Randevu Al</button>
</form>
