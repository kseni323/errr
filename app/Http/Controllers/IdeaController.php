<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Idea;
use Illuminate\Support\Facades\Mail;
class IdeaController extends Controller
{
    public function sendIdea(Request $request)
    {
        // Валидация данных формы
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'idea' => 'required|string|max:1000',
        ]);
        // Сохранение идеи в базу данных
        $idea = new Idea();
        $idea->name = $validated['name'];
        $idea->email = $validated['email'];
        $idea->idea = $validated['idea'];
        $idea->save();
        // Отправка письма
        $to = "maksimkharitonov28@yandex.ru";
        $subject = "Предложение идеи от " . $validated['name'];
        $message = "Имя: " . $validated['name'] . "\nПочта: " . $validated['email'] . "\nИдея: " . $validated['idea'];
        mail($to, $subject, $message, "From: " . $validated['email']);
        // Перенаправляем обратно на ту же страницу с сообщением об успехе
        return redirect()->back()->with('success', 'Ваша идея отправлена и сохранена в базу данных!');
    }
}
