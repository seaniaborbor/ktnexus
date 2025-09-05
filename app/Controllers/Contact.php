<?php

namespace App\Controllers;

use App\Models\MessageModel;

class Contact extends BaseController
{
   public function index()
{
    $messageModel = new MessageModel();
    $data = [
        'messages' => $messageModel->orderBy('created_at', 'DESC')->findAll(),
        'pager' => $messageModel->pager,
        'passLink' => "inbox",
    ];
  
    
    return view('dashboard/inbox', $data);
}

public function delete($id)
{
    $messageModel = new MessageModel();
    $messageModel->delete($id);
    
    return redirect()->to('/dashboard/inbox')->with('success', 'Message deleted successfully');
}

    public function sendMessage()
    {
        helper(['form', 'url']);
        
        $model = new MessageModel();
        
        if (!$this->validate($model->validationRules, $model->validationMessages)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'subject' => $this->request->getPost('subject'),
            'message' => $this->request->getPost('message'),
        ];
        
        if ($model->save($data)) {
            return redirect()->to('/#contact')->with('success', 'Your message has been sent successfully!');
        } else {
            return redirect()->back()->withInput()->with('error', 'Failed to send message. Please try again.');
        }
    }
}