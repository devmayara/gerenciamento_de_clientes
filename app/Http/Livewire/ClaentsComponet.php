<?php

namespace App\Http\Livewire;

use App\Models\ClaentsAddress;
use App\Models\Claent;
use Livewire\Component;

class ClaentsComponet extends Component
{
    public $name, $surname, $cpf_cnpj, $phone, $email, $zip, $address, $state, $complement, $city, $num,
            $name_1, $phone_1, $email_1, $name_2, $phone_2, $email_2, $name_3, $phone_3, $email_3;
            
    public $view_claent_id, $view_claent_name,  $view_claent_phone, $view_claent_email;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required|min:3',
            'surname' => '',
            'cpf_cnpj' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'zip' => 'required',
            'address' => 'required',
            'state' => 'required',
            'complement' => '',
            'city' => 'required',
            'num' => 'required',
            'name_1' => '',
            'phone_1' => '',
            'email_1' => '',
            'name_2' => '',
            'phone_2' => '',
            'email_2' => '',
            'name_3' => '',
            'phone_3' => '',
            'email_3' => ''
        ]);
    }
    public function storeClaentData()
    {
        $this->validate([
            'name' => 'required|min:3',
            'surname' => '',
            'cpf_cnpj' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'zip' => 'required',
            'address' => 'required',
            'state' => 'required',
            'complement' => '',
            'city' => 'required',
            'num' => 'required',
            'name_1' => '',
            'phone_1' => '',
            'email_1' => '',
            'name_2' => '',
            'phone_2' => '',
            'email_2' => '',
            'name_3' => '',
            'phone_3' => '',
            'email_3' => ''
        ]);

        //  Add Claent Data
        $claent = new Claent();
        $claent->name = $this->name;
        $claent->surname = $this->surname;
        $claent->cpf_cnpj = $this->cpf_cnpj;
        $claent->phone = $this->phone;
        $claent->email = $this->email;
        $claent->zip = $this->zip;
        $claent->address = $this->address;
        $claent->state = $this->state;
        $claent->complement = $this->complement;
        $claent->city = $this->city;
        $claent->num = $this->num;
        $claent->name_1 = $this->name_1;
        $claent->phone_1 = $this->phone_1;
        $claent->email_1 = $this->email_1;
        $claent->name_2 = $this->name_2;
        $claent->phone_2 = $this->phone_2;
        $claent->email_2 = $this->email_2;
        $claent->name_3 = $this->name_3;
        $claent->phone_3 = $this->phone_3;
        $claent->email_3 = $this->email_3;

        $claent->save();

        session()->flash('message', 'Novo cliente foi adicionado com sucesso!');

        $this->name = '';
        $this->surname = '';
        $this->cpf_cnpj = '';
        $this->phone = '';
        $this->email = '';
        $this->zip = '';
        $this->address = '';
        $this->state = '';
        $this->complement = '';
        $this->city = '';
        $this->num = '';
        $this->name_1 = '';
        $this->phone_1 = '';
        $this->email_1 = '';
        $this->name_2 = '';
        $this->phone_2 = '';
        $this->email_2 = '';
        $this->name_3 = '';
        $this->phone_3 = '';
        $this->email_3 = '';

        $this->dispatchBrowserEvent('close-modal');
    }

    public function resetInputs()
    {
        $this->name = '';
        $this->surname = '';
        $this->cpf_cnpj = '';
        $this->phone = '';
        $this->email = '';
        $this->zip = '';
        $this->address = '';
        $this->state = '';
        $this->complement = '';
        $this->city = '';
        $this->num = '';
        $this->name_1 = '';
        $this->phone_1 = '';
        $this->email_1 = '';
        $this->name_2 = '';
        $this->phone_2 = '';
        $this->email_2 = '';
        $this->name_3 = '';
        $this->phone_3 = '';
        $this->email_3 = '';
    }

    public function close()
    {
        $this->resetInputs();
    }

    public function editClaents($id)
    {
        $claent = Claent::where('id', $id)->first();

        $this->claent_edit_id = $claent->id;
        $this->name = $claent->name;
        $this->surname = $claent->surname;
        $this->cpf_cnpj = $claent->cpf_cnpj;
        $this->phone = $claent->phone;
        $this->email = $claent->email;
        $this->zip = $claent->zip;
        $this->address = $claent->address;
        $this->state = $claent->state;
        $this->complement = $claent->complement;
        $this->city = $claent->city;
        $this->num = $claent->num;
        $this->name_1 = $claent->name_1;
        $this->phone_1 = $claent->phone_1;
        $this->email_1 = $claent->email_1;
        $this->name_2 = $claent->name_2;
        $this->phone_2 = $claent->phone_2;
        $this->email_2 = $claent->email_2;
        $this->name_3 = $claent->name_3;
        $this->phone_3 = $claent->phone_3;
        $this->email_3 = $claent->email_3;

        $this->dispatchBrowserEvent('show-edit-claent-modal');
    }
    public function editClaentData()
    {
        $this->validate([
            'name' => 'required|min:3',
            'surname' => '',
            'cpf_cnpj' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'zip' => 'required',
            'address' => 'required',
            'state' => 'required',
            'complement' => '',
            'city' => 'required',
            'num' => 'required',
            'name_1' => '',
            'phone_1' => '',
            'email_1' => '',
            'name_2' => '',
            'phone_2' => '',
            'email_2' => '',
            'name_3' => '',
            'phone_3' => '',
            'email_3' => ''
        ]);

        $claent = Claent::where('id', $this->claent_edit_id)->first();
        $claent->name = $this->name;
        $claent->surname = $this->surname;
        $claent->cpf_cnpj = $this->cpf_cnpj;
        $claent->phone = $this->phone;
        $claent->email = $this->email;
        $claent->zip = $this->zip;
        $claent->address = $this->address;
        $claent->state = $this->state;
        $claent->complement = $this->complement;
        $claent->city = $this->city;
        $claent->num = $this->num;
        $claent->name_1 = $this->name_1;
        $claent->phone_1 = $this->phone_1;
        $claent->email_1 = $this->email_1;
        $claent->name_2 = $this->name_2;
        $claent->phone_2 = $this->phone_2;
        $claent->email_2 = $this->email_2;
        $claent->name_3 = $this->name_3;
        $claent->phone_3 = $this->phone_3;
        $claent->email_3 = $this->email_3;

        $claent->save();

        session()->flash('message', 'O cliente foi atualizado com sucesso!');

        //For hide modal after add student success
        $this->dispatchBrowserEvent('close-modal');
    }

    public function deleteConfirmation($id)
    {
        $this->claent_delete_id = $id;

        $this->dispatchBrowserEvent('show-delete-confirmation-modal');
    }

    public function deleteClaentData()
    {
        $claent = Claent::where('id', $this->claent_delete_id)->first();
        $claent->delete();

        session()->flash('message', 'O cliente foi excluído com sucesso!');

        $this->dispatchBrowserEvent('close-modal');

        $this->claent_delete_id = '';
    }

    public function cancel()
    {
        $this->claent_delete_id = '';
    }

    public function viewClaentDetails($id)
    {
        $claent = Claent::where('id', $id)->first();

        $this->view_claent_id = $claent->id;
        $this->view_claent_name = $claent->name;
        $this->view_claent_phone = $claent->phone;
        $this->view_claent_email = $claent->email;

        $this->dispatchBrowserEvent('show-view-claent-modal');
    }

    public function closeViewClaentModal()
    {
        $this->view_claent_id = '';
        $this->view_claent_name = '';
        $this->view_claent_phone = '';
        $this->view_claent_email = '';
    }

    public function render()
    {
        $claents = Claent::all();

        return view('livewire.claents-componet', ['claents' => $claents])->layout('livewire.layouts.base');
    }
}
