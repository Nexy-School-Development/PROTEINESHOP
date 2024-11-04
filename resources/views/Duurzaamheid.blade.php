@extends('components.layout')

@section('content')

    <body class="bg-gray-100 text-gray-800">
        <header class="bg-green-700 text-white p-4">
            <h1 class="text-3xl font-bold text-center">Proteineshop</h1>
            <p class="text-center">Duurzame proteïne voor een betere toekomst</p>
        </header>

        <main class="container mx-auto p-4">
            <section class="mb-8">
                <h2 class="text-2xl font-bold mb-4">Wat is duurzaamheid?</h2>
                <p>
                    Duurzaamheid betekent het creëren van een balans tussen economische groei, zorg voor het milieu, en
                    sociaal welzijn. Het draait om verantwoorde keuzes maken die zowel de planeet beschermen als de
                    levenskwaliteit verbeteren, voor zowel huidige als toekomstige generaties. Bij Proteineshop
                    zetten we ons volledig in voor duurzame innovatie.
                </p>
            </section>

            <section class="mb-8">
                <h2 class="text-2xl font-bold mb-4">Onze aanpak</h2>
                <div class="mb-4">
                    <h3 class="text-xl font-semibold">Arbeiders</h3>
                    <p>
                        We hechten veel waarde aan het welzijn van onze werknemers. Daarom bieden we eerlijke lonen,
                        flexibele werktijden en ruime opleidingsmogelijkheden. Veiligheid is onze topprioriteit, en we
                        investeren in een werkplek die zowel fysiek als mentaal welzijn bevordert.
                    </p>
                    <ul class="list-disc ml-6 mt-2">
                        <li>Minimaal leefloon voor alle werknemers, zowel lokaal als wereldwijd.</li>
                        <li>Jaarlijkse training en trainingen om vaardigheden te ontwikkelen en verbeteren.</li>
                        <li>strenge regels op de werkvloer om risico's te verminderen.</li>
                    </ul>
                </div>
                <div class="mb-4">
                    <h3 class="text-xl font-semibold">Milieu</h3>
                    <p>
                        Proteineshop werkt actief aan het verkleinen van onze ecologische voetafdruk. Door het
                        minimaliseren van schadelijke stoffen en het bevorderen van recycling, beschermen we de natuur en
                        verminderen we onze CO2-uitstoot.
                    </p>
                    <ul class="list-disc ml-6 mt-2">
                        <li>Gebruik van gerecycleerde materialen in verpakkingen en producten.</li>
                        <li>strnge controle op schadelijke stoffen en niet-natuurlijke ingrediënten.</li>
                        <li>Compensatie van CO2-uitstoot door te investeren in herbebossingsprojecten.</li>
                    </ul>
                </div>
                <div class="mb-4">
                    <h3 class="text-xl font-semibold">Eerlijke handel</h3>
                    <p>
                        Onze ingrediënten komen van boeren en producenten in derdewereldlanden, waarmee we goede banden
                        hebben opgebouwd. We betalen eerlijke prijzen zodat zij kunnen investeren in hun gemeenschappen en
                        duurzaam kunnen produceren.
                    </p>
                    <ul class="list-disc ml-6 mt-2">
                        <li>Langdurige samenwerkingen met kleinschalige boeren.</li>
                        <li>Eerlijke prijzen om economische groei te verbeteren in hun gemeenschappen.</li>
                    </ul>
                </div>
                <div class="mb-4">
                    <h3 class="text-xl font-semibold">Omgeving en maatschappij</h3>
                    <p>
                        Wij geloven dat we als bedrijf een rol moeten spelen in het verbeteren van de samenleving. Daarom
                        sponsoren we lokale projecten en nemen we deel aan vrijwilligerswerk om bij te dragen aan een betere
                        wereld.
                    </p>
                    <ul class="list-disc ml-6 mt-2">
                        <li>Sponsoring van lokale sport- en milieuprojecten.</li>
                        <li>Vrijwilligerswerk door werknemers bij natuurbehoud-initiatieven.</li>
                        <li>Ondersteuning van onderwijsprogramma's voor duurzame landbouwtechnieken.</li>
                    </ul>
                </div>
            </section>
        </main>

        <footer class="bg-green-700 text-white p-4 text-center">
            <p>&copy; 2024 Proteineshop. Alle rechten voorbehouden.</p>
            <p>Volg ons op <a href="#" class="underline">Social Media</a> | Contact: <a href="mailto:"
                    class="underline">info@proteineshop.nl</a></p>
        </footer>
    </body>
@endsection
