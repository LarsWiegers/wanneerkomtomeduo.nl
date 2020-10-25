<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>wanneerkomtomeduo.nl</title>
        <meta name="description" content="Ook geen idee wanneer ome duo weer langs komt? Dat is nu geen probleem meer! Deel ook even met je leen maatjes!">

        <!-- Fonts -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <link rel="shortcut icon" href="{{asset('favicon.png')}}" />
        <link rel="apple-touch-icon" href="{{asset('favicon.png')}}" />
        <link rel="apple-touch-icon-precomposed" href="{{asset('favicon.png')}}" />
    </head>
    <body class="antialiased ">
    <div class="bg-white pb-4 px-4 rounded-md min-h-screen min-w-full w-full">
        <div class="grid grid-cols-12 w-full">
            <div class="col-span-12 md:col-span-6 p-2">
                <div class="flex justify-between w-full pt-6 ">
                    <p class="ml-3  text-3xl uppercase" title="voor de sukkeltjes onder ons dat is {{date('Y')}}"> Nog dit jaar:</p>
                </div>
                <div class="mt-6">
                    <table class="table-auto border-collapse w-full">
                        <thead>
                        <tr class="rounded-lg text-sm font-medium text-left text-white" style="font-size: 0.9674rem">
                            <th class="px-4 py-2 bg-blue-300">Wanneer</th>
                        </tr>
                        </thead>
                        <tbody class="text-sm font-normal text-gray-700">
                        @foreach($thisYear as $date)
                            <tr class="hover:bg-blue-300 border-b border-gray-200 py-10">
                                <td class="p-4 text-2xl ">{{$date}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6 p-2">
                <div class="flex justify-between w-full pt-6 ">
                    <p class="ml-3  text-3xl uppercase" title="voor de sukkeltjes onder ons dat is {{date('Y') + 1}}"> Volgend jaar:</p>
                </div>
                <div class="mt-6">
                    <table class="table-auto border-collapse w-full">
                        <thead>
                        <tr class="rounded-lg text-sm font-medium text-white text-left" style="font-size: 0.9674rem">
                            <th class="px-4 py-2 bg-blue-300">Wanneer</th>
                        </tr>
                        </thead>
                        <tbody class="text-sm font-normal text-gray-700">
                        @foreach($nextYear as $date)
                            <tr class="hover:bg-blue-300 border-b border-gray-200 py-10">
                                <td class="p-4 text-2xl">{{$date}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row justify-content-around items-center flex-wrap">
        <img src="https://media.s-bol.com/qxwlz7Om2pG3/550x548.jpg" alt="'Maximaal lenen = maximaal leven' - Ome Duo">
        <img src="https://pics.me.me/thumb_niemand-studenten-sbs-maar-als-ze-ome-duo-wat-hoger-47857395.png" alt="'Niemand:' 'Studenten:' Maar als ze Ome duo wat hooger maakten...">
        <img src="https://scontent-lga3-2.cdninstagram.com/v/t51.2885-15/e35/122300184_788117421975057_7561833151328246667_n.jpg?_nc_ht=scontent-lga3-2.cdninstagram.com&_nc_cat=109&_nc_ohc=hoYqK4tDJM8AX-hpJal&_nc_tp=18&oh=144cf349068ee61f98f2ce6ccaa2b978&oe=5FBFAE0E" alt="Voor STUFI : arm, Na STUFI: rijk">
    </div>
    <footer class="bg-blue-300 text-center p-4">
        Gemaakt door: <a href="https://www.larswiegers.nl" class="underline">Lars Wiegers</a>
        <br/>
    </footer>
    </body>
</html>
