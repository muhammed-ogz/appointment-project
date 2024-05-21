<?php
$dataFile = '../data/randevular.json';

// Form gönderimi
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    $adsoyad = $input['adsoyad'] ?? '';
    $email = $input['email'] ?? '';
    $randevutarih = $input['randevutarih'] ?? '';
    $bolum = $input['bolum'] ?? '';
    $telno = $input['telno'] ?? '';
    $mesaj = $input['mesaj'] ?? '';

    if ($adsoyad && $email && $randevutarih && $bolum && $telno) {
        $randevular = json_decode(file_get_contents($dataFile), true);
        $randevular[] = [
            'adsoyad' => $adsoyad,
            'email' => $email,
            'randevutarih' => $randevutarih,
            'bolum' => $bolum,
            'telno' => $telno,
            'mesaj' => $mesaj
        ];
        file_put_contents($dataFile, json_encode($randevular));
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Tüm alanları doldurun.']);
    }
} else {
    $randevular = json_decode(file_get_contents($dataFile), true);
    echo json_encode(['randevular' => $randevular]);
}
?>
