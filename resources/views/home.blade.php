<x-layout>
  <main class="py-10">
    <h1>
      Veja seus hábitos ganharem vida
    </h1>

    @auth
      <p>
        Bem vindo(a), {{ auth()->user()->name }}!
      </p>
    @endauth
  </main>
</x-layout>
