<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <title>Notes</title>
</head>

<body>
    <form class="new-note" action="create.php" method="post">
        <input type="hidden" name="id" value="">
        <input type="text" name="title" placeholder="Note title" autocomplete="off"
            value="">
        <textarea name="description" cols="30" rows="4"
            placeholder="Note Description"></textarea>
        <button>
            @if (!empty($currentNote['id']))
                Update
            @else
                New note
            @endif
        </button>
    </form>
    <div class="notes">
        @if ($notes->count() > 0)
            @foreach ($notes as $note)
                <div class="note">
                    <div class="title">
                        <a href="">
                            {{ $note->title }}
                        </a>
                    </div>
                    <div class="description">
                        {{ $note->description }}
                    </div>
                    <small>
                        {{ date('d/m/Y H:i', strtotime($note->create_date)) }}
                    </small>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="{{ $note->id }}">
                        <button class="close">X</button>
                    </form>
                </div>
            @endforeach
        @else
            <div>Aucune note dans la base de données</div>
        @endif
    </div>
</body>

</html>