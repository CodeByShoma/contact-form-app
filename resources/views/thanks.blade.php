<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>送信完了</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 py-24">
    <div class="max-w-xl mx-auto text-center bg-white p-8 rounded shadow">
        <h1 class="text-2xl font-bold text-green-600 mb-4">お問い合わせありがとうございました！</h1>
        <p class="text-gray-700">内容を確認のうえ、担当者よりご連絡させていただきます。</p>
        <div class="mt-6">
            <a href="{{ route('contact.show') }}" class="text-indigo-500 underline">Topに戻る</a>
        </div>
    </div>
</body>
</html>
