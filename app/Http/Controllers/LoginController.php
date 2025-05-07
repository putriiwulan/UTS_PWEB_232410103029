protected function authenticated(Request $request, $user)
{
    return redirect()->route('dashboard');
}
