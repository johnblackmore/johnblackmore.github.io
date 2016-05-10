@extends('_includes.blog_post_base')

@section('header::image', 'chainlink.jpg')
@section('post::title', 'Your Pa$$w0rd1 is weak!')
@section('post::date', 'May 10, 2016')
@section('post::brief', 'OK maybe it was, but so is your password policy')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    @markdown
    I did not know this at the time but May 5th, 2016 was [World Password Day](https://passwordday.org/).

    Just before I settled in to bed that evening I receiving an email from GoDaddy alerting me to
    the importance of the day that had almost past. It was possibly the most passive aggressive email
    I have ever received (and that's saying something).

    ![John is Sad](/img/blog/john-is-sad.png)

    So the opening gambit, the hook, the part of the email where the recipient makes a decision to read
    further or send it straight to the archive reads:

    * This is John.
    * John is sad.
    * John has a weak password.

    OK you have my attention, proceed.

    ## So who is John?

    When I first read this it didn't quite register, I mean John is a fairly generic English language name.
    So much so that the term "John Doe" is often used as a legal placeholder where the true identity of
    an individual is not known or must be withheld for legal reasons.

    But no, I don't think GoDaddy would be that generic. Not when every other email they send appears to be
    targeting me by my first name. This is deliberate, a result of campaign marketing. At this point I
    started to get mad.

    <blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">You know what <a href="https://twitter.com/GoDaddy">@GoDaddy</a> John is pretty f&#39;ing mad too if you think this kind of email is clever <a href="https://t.co/5RZnraW1Yn">pic.twitter.com/5RZnraW1Yn</a></p>&mdash; John Blackmore (@johnblackmore) <a href="https://twitter.com/johnblackmore/status/728353820485505025">May 5, 2016</a></blockquote>
    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

    ## Why is John sad?

    Now that I have identified that the email is referring to me, why would I be sad? I can assure you I am
    not "feeling or showing sorrow" or "unhappy". Perhaps they refer to the informal definition of sad which
    is "pathetically inadequate or unfashionable"? While some of my younger siblings, ex-lovers or work
    colleagues may agree with that definition, I would not. Although if GoDaddy had meant it in that
    way then that is exceptionally rude and they are jerks.

    ## John does not have a weak password!

    So now I've decided that this email is directed at me, and is a defamation of character. What more could
    possibly be wrong with this email.

    I have a weak password? I find that unlikely.

    I have been using [1Password](https://agilebits.com/) for nearly a year and every site I register
    for gets a uniquely generated complex password that I never even look at let alone have the ability
    to memorise... say it isn't true.

    But they were right, kind of. 1Password confirmed that the password for my GoDaddy account was at best
    a "medium" strength password.

    OK you got me, but this doesn't end here.

    ## What makes a secure password?

    Bearing in mind it's now nearly 11pm at night and all I want to do is go to bed, I made the decision that
    I would quickly get my laptop out, login to GoDaddy and update my password just to keep them happy and
    so that I could rest easy in the bed I was trying so desperately to get to.

    On the password change screen I'm confronted with an enforced pattern I need to follow to ensure my
    password was "secure" enough. It's laughable, but at least they tried. The new password **must**:

    * Contain at least 9 characters.
    * Contain an uppercase character.
    * Contain a lowercase character.
    * Contain at least one number.
    * Not begin or end with a space.

    So based on these new rules I can see where my old password failed. Although it contained upper, lower,
    numeric and even non-alphabetic characters it was only 8 characters long. Oh dear, how awful of me.

    But how awful are these rules? Arguably because they don't enforce having non-alpha characters this
    should at least allow people to use passwords they can easily remember?

    The problem here is not the rules you have to follow to build an acceptable password. The problem is that
    the resulting passwords are then not checked for any type of complexity. Just because I follow the rules
    does not mean that my password will be secure.

    Lets try something. According to [The Top 500 Worst Passwords of All Time](http://www.whatsmypass.com/the-top-500-worst-passwords-of-all-time)
    the second worst password is, you can probably guess, "password". However if we simply manipulate that
    slightly by starting it with an uppercase letter and adding a number on the end we get "Password1".

    Let's just run that past our set of rules above and see if it stacks up:

    * Contain at least 9 characters - Yes!
    * Contain an uppercase character - Yes!
    * Contain a lowercase character - Yes!
    * Contain at least one number - Yes!
    * Not begin or end with a space - Yes!

    So there you go, "Password1" is valid, I can secure my GoDaddy account and finally get to bed.

    ## Wait, what? That can't be right?

    No. Just to be clear "Password1" is not a very good password.

    This brings us nicely onto corporate responsibility when it comes to educating users about
    password security, or more specifically password strength. In this situation what we have been
    presented with is a list of rules that appear on face value to be well thought out, rules that you can
    reason with. A less experienced web user may even believe that because they have followed the
    rules that have been presented to them that they now have a secure password.

    As individuals and as an industry we need to ensure that users are aware of what they are doing
    when it comes to being safe online. This starts with passwords, and extends to other topics such
    as two factor authentication and email scams.

    ### Help for Individuals

    There are many tools available to help you pick a secure password. I personally use and would
    recommend using a password manager, one that has a strong reputation for keeping your secrets,
    secret (not all of them do).

    Using a password manager allows you to use a different password
    for every site you use, but you only have to remember one (hopefully secure) password to unlock
    them all.

    Using unique passwords for each site also protects you if a website gets compromised,
    because you will feel safe knowing that the password you used on the compromised site
    was not used on any others.

    ### Help for Businesses

    Password security is not just something that individuals need to take care of though. There are
    tools available that can help businesses to help their customers when it comes to strong
    passwords.

    Dropbox open sourced a tool called [zxcvbn](https://github.com/dropbox/zxcvbn)
    which can perform realtime password strength
    estimation based on a number of factors including a dictionary of 10,000 common passwords. It can
    be a bit fiddly to set up but I hope to be covering that in a future article.

    Dropbox even wrote an extensive post comparing the password strength estimation of several top
    websites and compared them to their own solution. You can read more at
    [zxcvbn: realistic password strength estimation](https://blogs.dropbox.com/tech/2012/04/zxcvbn-realistic-password-strength-estimation/)

    ## Conclusion

    In the end, despite being annoyed and upset that GoDaddy would have the nerve to call me out
    on my password there were a number of things that came out of the experience:

    * My password was updated to a much longer and more complex one that I will never remember (and don't need to)
    * I enabled Two Factor Authentication on my account - more about this in a future article.

    Overall I must tip my hat to GoDaddy. Despite thoroughly annoying me to the point of telling
    them as much on twitter, that email did get my attention, did prompt me to login and did get me
    to update my password. So for that, congratulations.

    However there is still a question that needs to be answered. If my original password was being stored
    securely within the GoDaddy system (by this I mean hashed and salted), how could they possibly know
    how secure or not the password was?

    I'm sure I could come up with a few conspiracy theories, but lets just hope that it wasn't just me that
    got that email and they instead sent it to every single account holder just to see how many would bite!
    @endmarkdown

@stop