<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}.bordered{border: 1px solid black}
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

    <script>
        function optchange(select) {
            var selected = select.options[select.selectedIndex];
            if(selected.id == 1)
            {
                document.getElementById("estateopt").innerHTML = `
                    <p>Минимальная площадь</p>
                    <p><input name="min_s" type="number" placeholder="..."  value=""></p>
                    
                    <p>Максимальная площадь</p>
                    <p><input name="max_s" type="number" placeholder="..."  value=""></p>

                    <p>Мин кол-во комнат</p>
                    <p><input name="min_count" type="number"  value=""/></p>

                    <p>Макс кол-во комнат</p>
                    <p><input name="max_count" type="number" placeholder="..."  value=""></p>

                    <p>Мин этаж</p>
                    <p><input name="min_floor" type="number"value=""/></p>

                    <p>Макс этаж</p>
                    <p><input name="max_floor" type="number" value="" placeholder="..."/></p>`;
            }
            if(selected.id == 2)
            {
                document.getElementById("estateopt").innerHTML = `
                    <p>Минимальная площадь</p>
                    <p><input name="min_s" type="number" placeholder="..."  value=""></p>

                    <p>Максимальная площадь</p>
                    <p><input name="max_s" type="number" placeholder="..."  value=""></p>

                    <p>Мин кол-во комнат</p>
                    <p><input name="min_count" type="number"  value=""/></p>

                    <p>Макс кол-во комнат</p>
                    <p><input name="max_count" type="number" placeholder="..."  value=""></p>

                    <p>Мин этажей</p>
                    <p><input name="min_floor" type="number"value=""/></p>

                    <p>Макс этажей</p>
                    <p><input name="max_floor" type="number" value="" placeholder="..."/></p>`;
            }
            if(selected.id == 3)
            {
                document.getElementById("estateopt").innerHTML = `
                    <p>Минимальная площадь</p>
                    <p><input name="min_s" type="number" placeholder="..."  value=""></p>

                    <p>Максимальная площадь</p>
                    <p><input name="max_s" type="number" placeholder="..."  value=""></p>`;
            }
            if(selected.id == 0)
            {
                document.getElementById("estateopt").innerHTML = "";
            }
            document.getElementById("estate_type").value = selected.id;
            //console.log(document.getElementById("estate_type").value);
        }
    </script>
</head>
<body class="antialiased">
    <h2>Создание заявки на покупку недвижимости</h2>
    <form action="{{route('create_req')}}" method="post">
        @csrf
        <div class="client_card">
            <h2>Данные клиента</h2>
            <p>Фамилия</p>
            <p><input name="middlename" type="text" placeholder="..."  value="{{ $user->middle_name }}" readonly/></p>
            <p>Имя</p>
            <p><input name="firstname" type="text"  value="{{ $user->first_name }}" readonly/></p>
            <p>Отчество</p>
            <p><input name="lastname" type="text" placeholder="..."  value="{{ $user->last_name }}"readonly /></p>
            <p>Номер телефона</p>
            <p><input name="phone" type="tel" placeholder="8xxx-xxx-xx-xx" value="{{ $payload->phone }}" readonly/></p>
            <p>Эл. почта</p>
            <p><input name="email" type="email" value="{{ $payload->email }}" placeholder="..." readonly/></p>
        </div>

        <div class="adress_card">
            <h2>Адрес</h2>
            <p>Город</p>
            <p><input name="city" type="text" value="{{ old('city') }}" placeholder="..."/></p>
            <p>Улица</p>
            <p><input name="street" type="text" value="{{ old('street') }}" placeholder="..."/></p>
            <p>Номер дома</p>
            <p><input name="house_num" type="number" value="{{ old('house_num') }}" placeholder="..."/></p>
            <p>Номер квартиры</p>
            <p><input name="flat_num" type="number" value="{{ old('flat_num') }}" placeholder="..."/></p>
            <p>Минимальная цена</p>
            <p><input name="min_price" type="number" value="{{ old('min_price') }}" placeholder="..."/></p>
            <p>Максимальная цена</p>
            <p><input name="max_price" type="number" value="{{ old('max_price') }}" placeholder="..."/></p>
        </div>

        <div class="req_card">
            <h2>Данные недвижимости</h2>
            <select onchange="optchange(this)" required="required" name="estate_type" id="opt">
                <option id="0" value="">Выбирите тип недвижимости</option>
                <option id="1">Квартира</option>
                <option id="2">Дом</option>
                <option id="3">Земельный участок</option>
            </select>
            <div id="estateopt">
                {{-- содержимое меняется скриптом --}}
            </div>

            <input type="hidden" id="estate_type" name="estate_type" type="text" value="">
            <input type="hidden" name="user_id" type="number" value="{{ $user->id }}">
        </div>
        <button type="submit">Отправить заявку</button>
    </form>
</body>
</html>
