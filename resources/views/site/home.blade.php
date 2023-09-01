<x-site-layout>
    <!-- main-area -->
    <main>
        @include('components.site.sliderArea')

        @include('components.site.services')

        @include('components.site.gallery')

        @include('components.site.counter')

        @include('components.site.testimonial')

        @include('components.site.brand')

        @include('components.site.story')

        @include('components.site.award')

        @include('components.site.contact')


    </main>
    <!-- main-area-end -->
    <x-slot:MetaData>
        <title>Mohamed Ashamallah - A Software Engineer</title>
        <meta name="description" content="Finding solutions to challenges and focused on customer satisfaction. Proven experience developing consumer-focused web sites using JavaScript and PHP. Experience building products for Web.
    I love to learn Software engineering, more standards for Programming, user experience, best practices, usability, and speed code. 
    Responding to challenges by designing and developing solutions and building web applications aligned to customer services. 
    Translating solutions into code.">

        <meta property="og:title" content="Mohamed Ashamallah - A Software Engineer" />
        <meta property="og:image" content="{{ asset('site/favicon_io/screen.png') }}" />
        <meta property="og:description" content="Finding solutions to challenges and focused on customer satisfaction. Proven experience developing consumer-focused web sites using JavaScript and PHP. Experience building products for Web.
    I love to learn Software engineering, more standards for Programming, user experience, best practices, usability, and speed code. 
    Responding to challenges by designing and developing solutions and building web applications aligned to customer services. 
    Translating solutions into code." />
        <meta property="og:url" content="https://mohamed-ashamallah.com/" />
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="627" />
        <meta property="og:type" content="website" />
        </x-slot>
</x-site-layout>