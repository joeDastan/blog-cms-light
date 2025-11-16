<x-layouts.app :title="__('Create Post')">
    <h3>New Post</h3>

    <x-forms.form method="POST" action="/posts">
        <x-forms.input label="Title" name="title" placeholder="CEO" />
        <x-forms.input label="Content" name="content" placeholder="The CEO Of The Comapany Earns 250000USD but he didn't do much so they fired him" />

        <x-forms.divider />

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layouts.app>
