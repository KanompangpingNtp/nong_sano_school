<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- ประชาสัมพันธ์ --}}
    @foreach ($pressRelease as $post)
    <p>วันที่ : {{ $post->title_name }}</p>
    <p>หัวข้อ : {{ $post->title_name }}</p>
    <p>ชื่อเรื่อง : {{ $post->topic_name }}</p>
    <p>รายละเอียด : {{ $post->details }}</p>

    {{-- รูปภาพ --}}
    <h4>รูปภาพ</h4>
    @if($post->photos->isNotEmpty())
    <div>
        @foreach($post->photos as $photo)
        <img src="{{ asset('storage/' . $photo->post_photo_file) }}" alt="Image" style="width:150px; height:150px; object-fit:cover; margin-bottom:10px;">
        @endforeach
    </div>
    @else
    <p>ไม่มีรูปภาพ</p>
    @endif

    {{-- วิดีโอที่เกี่ยวข้อง --}}
    @if ($post->videos->isNotEmpty())
    <h4>วิดีโอที่เกี่ยวข้อง:</h4>
    @foreach ($post->videos as $video)
    <video width="320" height="240" controls>
        <source src="{{ asset('storage/' . $video->post_video_file) }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    @endforeach
    @endif

    <h4>ไฟล์ PDF</h4>
    @if($post->pdfs->isNotEmpty())
    <ul>
        @foreach($post->pdfs as $pdf)
        <li><a href="{{ asset('storage/' . $pdf->post_pdf_file) }}" target="_blank">{{ $pdf->post_pdf_file }}</a></li>
        @endforeach
    </ul>
    @else
    <p>ไม่มีไฟล์ PDF</p>
    @endif

    @endforeach
</body>
</html>
