# Security policy

Please report a vulnerability privately through GitHub's "Report a vulnerability" (Security tab of this repository), not in a public issue. Include the SDK version, PHP version and a minimal reproduction.

This SDK never stores credentials: the ones you put in `Configuration` are used for the requests you make. Keep keys out of source control and use a vendor test environment while you integrate.
