<x-jet-form-section submit="updatePassword">
    <x-slot name="title">
        {{ __('Thay đổi mật khẩu') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Đảm bảo tài khoản của bạn đang sử dụng mật khẩu dài, và sử dung thêm các ký tự đặc biệt.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="current_password" value="{{ __('Nhập mật khẩu cũ') }}" />
            <x-jet-input id="current_password" type="password" class="mt-1 block w-full" wire:model.defer="state.current_password" autocomplete="current-password" />
            <x-jet-input-error for="current_password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password" value="{{ __('Nhập mật khẩu mới') }}" />
            <x-jet-input id="password" type="password" class="mt-1 block w-full" wire:model.defer="state.password" autocomplete="new-password" />
            <x-jet-input-error for="password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password_confirmation" value="{{ __('Nhập lại mật khẩu mới') }}" />
            <x-jet-input id="password_confirmation" type="password" class="mt-1 block w-full" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
            <x-jet-input-error for="password_confirmation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Đã lưu.') }}
        </x-jet-action-message>

        <x-jet-button>
            {{ __('Cập Nhật') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
