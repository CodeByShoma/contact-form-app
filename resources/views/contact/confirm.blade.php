<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>お問い合わせフォーム</title>

    {{-- TailWindCSS --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 py-24">
    <div class="max-w-xl mx-auto bg-white p-8 rounded shadow text-gray-800">
        <h1 class="text-2xl font-bold mb-6">以下の内容で送信しますか？</h1>

        <dl class="mb-6">
            <dt class="font-bold">名前</dt>
            <dd class="mb-4">{{ $data['name'] }}</dd>

            <dt class="font-bold">メールアドレス</dt>
            <dd class="mb-4">{{ $data['email'] }}</dd>

            <dt class="font-bold">本文</dt>
            <dd class="whitespace-pre-line">{{ $data['message'] }}</dd>
        </dl>

        {{-- 戻る --}}
        <form method="get" action="{{ route('contact.show') }}" class="inline-block mr-4">
            <button type="submit" class="bg-gray-300 px-4 py-2 rounded">戻る</button>
        </form>

        {{-- 送信 --}}
        <form method="post" action="{{ route('contact.send') }}" class="inline-block">
            @csrf
            <input type="hidden" name="name" value="{{ $data['name'] }}">
            <input type="hidden" name="email" value="{{ $data['email'] }}">
            <input type="hidden" name="message" value="{{ $data['message'] }}">
            <button type="submit" class="bg-indigo-500 text-white px-4 py-2 rounded">送信</button>
        </form>
    </div>
</body>

</html>


