from pathlib import Path
import zipfile

base = Path("/mnt/data/visualmath-ai-skpl-skill")
base.mkdir(exist_ok=True)

skill = """---
name: visualmath-ai-skpl
description: Membantu menyusun Dokumen Spesifikasi Kebutuhan Perangkat Lunak (SKPL/SRS) untuk project VisualMath AI dengan mengikuti struktur dan urutan template SKPL tim sebelumnya. Gunakan skill ini ketika pengguna meminta membuat, mengisi, memperbaiki, atau mengembangkan SKPL VisualMath AI. Struktur template harus dipertahankan; isi dokumen harus disesuaikan dengan konsep VisualMath AI yang diberikan pengguna, bukan menyalin isi project lama.
---

# Skill: SKPL VisualMath AI

## Tujuan

Gunakan skill ini untuk membantu membuat SKPL/SRS VisualMath AI secara konsisten dengan template SKPL project tim sebelumnya.

**Prinsip utama:**
- Template lama hanya menjadi **acuan struktur, urutan bab, subbab, jenis tabel, dan gaya dokumentasi**.
- Jangan menyalin konsep, fitur, nama sistem, aktor, teknologi, database, maupun isi project lama.
- Semua isi harus dibuat khusus berdasarkan kebutuhan dan rancangan **VisualMath AI**.
- Jika informasi VisualMath AI belum ditentukan, gunakan placeholder atau tanyakan seperlunya; jangan mengarang detail teknis yang belum disepakati.
- Pertahankan istilah SKPL/SRS yang digunakan pada template.

## Struktur Wajib Dokumen

Gunakan urutan berikut:

1. Cover
2. Lembar Pengesahan
3. Daftar Isi
4. Daftar Tabel
5. Daftar Gambar

### BAB I: PENDAHULUAN
a. Latar Belakang  
b. Tujuan Sistem  
c. Ruang Lingkup Sistem  
d. Daftar Istilah Penting (Glossary)

Untuk ruang lingkup, pisahkan:
- In Scope / MVP
- Out of Scope

### BAB II: DESKRIPSI UMUM SISTEM
a. Gambaran Umum Sistem  
b. Karakteristik & Stakeholder Aktor Sistem  
c. Metode Pengembangan Sistem (SDLC)

### BAB III: ANALISIS KEBUTUHAN SISTEM
a. Kebutuhan Fungsional (Functional Requirements / FR)  
b. Kebutuhan Non-Fungsional (Non-Functional Requirements / NFR)

FR harus memiliki identitas/kode kebutuhan, nama fitur, deskripsi, dan aktor terkait.
NFR harus dikelompokkan berdasarkan kategori yang relevan.

### BAB IV: PEMODELAN PROSES BISNIS & STRUKTUR LOGIS
a. Bisnis Proses Sistem Saat Ini (As-Is / Manual)  
b. Bisnis Proses Sistem Usulan (To-Be / Sistem Aplikasi)  
c. Swimlane Diagram Sistem  
d. Flowchart Logika Fitur Utama  
e. Data Flow Diagram (DFD)
   - i. Diagram Konteks
   - ii. DFD Level 0
f. Pemodelan Berorientasi Objek (UML)
   - i. Use Case Diagram
   - ii. Activity Diagram
   - iii. Sequence Diagram
   - iv. Class Diagram

### BAB V: ARSITEKTUR SISTEM & INFRASTRUKTUR TEKNIS
a. Desain Arsitektur Sistem (Three-Tier Architecture)  
b. Integrasi Layanan Pihak Ketiga (Third-Party API)  
c. Spesifikasi Infrastruktur (Deployment Technology Stack)

### BAB VI: KEBUTUHAN DATA & STRUKTUR BASIS DATA
a. Identifikasi & Kamus Data  
b. Conceptual Data Model (CDM / ERD)  
c. Physical Data Model (PDM / Skema Database Fisik)

### BAB VII: PERANCANGAN ANTARMUKA (UI/UX)
a. Desain Interface (High-Fidelity Mockup)  
b. Deskripsi Antarmuka & Navigasi Fitur

Jika role pengguna sudah ditentukan, kelompokkan desain interface berdasarkan role.

### BAB VIII: KEAMANAN, PENGUJIAN, DAN BATASAN SISTEM
a. Batasan Sistem  
b. Mekanisme Keamanan Sistem (Security Control)  
c. Rencana Pengujian Validasi Kebutuhan (System Testing Plan)

Jika relevan, sertakan pengujian usability seperti System Usability Scale (SUS).

### BAB IX: PENUTUP & DAFTAR PUSTAKA
a. Kesimpulan  
b. Saran Pengembangan  
c. Daftar Pustaka / Referensi Standar

## Konteks Awal VisualMath AI

Gunakan konteks berikut hanya sebagai dasar jika pengguna belum memberikan revisi:

VisualMath AI adalah platform pembelajaran matematika berbasis AI yang membantu mahasiswa memahami hubungan antara rumus, simbol, grafik, simulasi, contoh nyata, dan latihan adaptif.

Konsep inti:
**Rumus → Visualisasi → Grafik Interaktif → Simulasi → Contoh Nyata → Latihan Adaptif**

Aktor rancangan awal:
- Mahasiswa
- Dosen
- Admin

Fitur yang telah dibahas:
- Authentication
- AI Math Explainer
- Input dan pemahaman rumus
- Visualisasi rumus
- Grafik interaktif
- Step-by-step solver
- Simulasi perubahan parameter
- Contoh penerapan dunia nyata
- Latihan adaptif
- Dashboard mahasiswa
- Dashboard dosen
- Dashboard admin
- Progress belajar
- AI recommendation

Teknologi yang pernah dipertimbangkan:
- Frontend: React/Next.js
- Styling: Tailwind CSS
- Backend: Laravel REST API
- Database: PostgreSQL/MySQL
- AI: LLM API
- Mathematical engine: Math.js/SymPy
- Visualization: Plotly.js/JSXGraph
- Development: VS Code, Git, GitHub, Postman, Figma, Draw.io

**Penting:** Teknologi di atas adalah rancangan awal, bukan keputusan final. Jika pengguna mengubah stack, ikuti keputusan terbaru.

## Aturan Pemodelan

Ketika membuat diagram:
- Pastikan semua diagram konsisten dengan aktor dan FR.
- Use Case harus sesuai dengan fitur yang benar-benar ada.
- Activity Diagram harus merepresentasikan alur proses nyata.
- Sequence Diagram harus menunjukkan interaksi actor → frontend → backend → service/AI/database sesuai kebutuhan.
- Class Diagram harus konsisten dengan entitas dan proses sistem.
- DFD harus konsisten dengan data dan proses.
- ERD/CDM/PDM harus konsisten dengan kebutuhan data.
- Arsitektur harus konsisten dengan technology stack.
- Jangan membuat diagram yang saling bertentangan.

## Aturan Penulisan

- Gunakan bahasa Indonesia akademik yang jelas dan natural.
- Hindari bahasa yang terlalu kaku atau terdengar seperti hasil generasi AI.
- Jangan memperluas scope tanpa alasan.
- Bedakan fitur MVP dengan fitur pengembangan lanjutan.
- Untuk fitur AI, jelaskan peran AI secara spesifik.
- Untuk matematika, bedakan fungsi LLM sebagai penjelas/pembimbing dengan mathematical engine sebagai komponen perhitungan/validasi bila diperlukan.
- Gunakan tabel ketika informasi lebih mudah dibaca dalam bentuk tabel.
- Setiap FR/NFR harus dapat ditelusuri ke fitur atau kebutuhan sistem.
- Setiap aktor harus memiliki hak akses yang jelas.

## Alur Kerja Saat Diminta Membuat SKPL

1. Identifikasi kebutuhan dan keputusan terbaru tentang VisualMath AI.
2. Cocokkan kebutuhan tersebut dengan struktur template di atas.
3. Tentukan aktor dan hak akses.
4. Susun kebutuhan fungsional dan non-fungsional.
5. Susun proses bisnis As-Is dan To-Be.
6. Turunkan kebutuhan menjadi Use Case, Activity, Sequence, Class, DFD, ERD/CDM/PDM, dan arsitektur.
7. Susun rancangan UI/UX berdasarkan aktor dan fitur.
8. Tambahkan keamanan dan rencana pengujian.
9. Pastikan seluruh bagian konsisten.
10. Jangan mengubah urutan bab/subbab template kecuali pengguna secara eksplisit meminta perubahan.

## Referensi Struktur Template

File `TEMPLATE_SKPL_STRUCTURE.md` dalam skill ini berisi struktur ringkas yang harus dijadikan checklist sebelum menghasilkan dokumen.
"""

structure = """# TEMPLATE SKPL — STRUKTUR REFERENSI

Dokumen ini hanya menyimpan **struktur template**, bukan isi project lama.

## Bagian Awal
- Cover
- Lembar Pengesahan
- Daftar Isi
- Daftar Tabel
- Daftar Gambar

## BAB I: PENDAHULUAN
- a. Latar Belakang
- b. Tujuan Sistem
- c. Ruang Lingkup Sistem
- d. Daftar Istilah Penting (Glossary)

## BAB II: DESKRIPSI UMUM SISTEM
- a. Gambaran Umum Sistem
- b. Karakteristik & Stakeholder Aktor Sistem
- c. Metode Pengembangan Sistem (SDLC)

## BAB III: ANALISIS KEBUTUHAN SISTEM
- a. Kebutuhan Fungsional (FR)
- b. Kebutuhan Non-Fungsional (NFR)

## BAB IV: PEMODELAN PROSES BISNIS & STRUKTUR LOGIS
- a. Bisnis Proses Sistem Saat Ini (As-Is / Manual)
- b. Bisnis Proses Sistem Usulan (To-Be / Sistem Aplikasi)
- c. Swimlane Diagram Sistem
- d. Flowchart Logika Fitur Utama
- e. Data Flow Diagram (DFD)
  - i. Diagram Konteks
  - ii. DFD Level 0
- f. Pemodelan Berorientasi Objek (UML)
  - i. Use Case Diagram
  - ii. Activity Diagram
  - iii. Sequence Diagram
  - iv. Class Diagram

## BAB V: ARSITEKTUR SISTEM & INFRASTRUKTUR TEKNIS
- a. Desain Arsitektur Sistem (Three-Tier Architecture)
- b. Integrasi Layanan Pihak Ketiga (Third-Party API)
- c. Spesifikasi Infrastruktur (Deployment Technology Stack)

## BAB VI: KEBUTUHAN DATA & STRUKTUR BASIS DATA
- a. Identifikasi & Kamus Data
- b. Conceptual Data Model (CDM / ERD)
- c. Physical Data Model (PDM / Skema Database Fisik)

## BAB VII: PERANCANGAN ANTARMUKA (UI/UX)
- a. Desain Interface (High-Fidelity Mockup)
- b. Deskripsi Antarmuka & Navigasi Fitur

## BAB VIII: KEAMANAN, PENGUJIAN, DAN BATASAN SISTEM
- a. Batasan Sistem
- b. Mekanisme Keamanan Sistem (Security Control)
- c. Rencana Pengujian Validasi Kebutuhan (System Testing Plan)
- Kuesioner System Usability Scale (SUS), jika diperlukan

## BAB IX: PENUTUP & DAFTAR PUSTAKA
- a. Kesimpulan
- b. Saran Pengembangan
- c. Daftar Pustaka / Referensi Standar

## Aturan
Template ini adalah **kerangka**, bukan sumber isi. Semua konten harus berasal dari kebutuhan project VisualMath AI yang terbaru.
"""

(base / "SKILL.md").write_text(skill, encoding="utf-8")
(base / "TEMPLATE_SKPL_STRUCTURE.md").write_text(structure, encoding="utf-8")

zip_path = "/mnt/data/visualmath-ai-skpl-skill.zip"
with zipfile.ZipFile(zip_path, "w", zipfile.ZIP_DEFLATED) as z:
    z.write(base / "SKILL.md", "visualmath-ai-skpl/SKILL.md")
    z.write(base / "TEMPLATE_SKPL_STRUCTURE.md", "visualmath-ai-skpl/TEMPLATE_SKPL_STRUCTURE.md")

print(zip_path)
